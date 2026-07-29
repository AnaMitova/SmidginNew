<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * A gin in the range — one card in the "Discover Our Gin" carousel plus,
 * unless it points at one of the hand-built pages, its own page at
 * /gins/{slug}.
 */
class Gin extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'accent_color',
        'name_font',
        'wordmark_image',
        'card_image',
        'bottle_image',
        'tagline',
        'buy_url',
        'heading_one',
        'body_one',
        'heading_two',
        'body_two',
        'heading_three',
        'body_three',
        'custom_path',
        'sort_order',
        'active',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Fonts the site has loaded, offered as choices in the admin panel.
     */
    public const FONTS = [
        'font-montserrat'   => 'Montserrat',
        'font-Baskervville' => 'Baskervville',
        'font-Papyrus'      => 'Papyrus',
        'font-Velvet'       => 'Velvet',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Where the card links to — a hand-built page when one was set, the
     * generated page otherwise.
     */
    public function getUrlAttribute(): string
    {
        return $this->custom_path
            ? url($this->custom_path)
            : route('gins.show', $this->slug);
    }

    /**
     * The next gin in the carousel, wrapping back to the first — used by the
     * teaser at the bottom of every gin page.
     */
    public function nextGin(): ?self
    {
        $gins = static::active()->ordered()->get();
        if ($gins->count() < 2) {
            return null;
        }

        $position = $gins->search(fn (self $gin) => $gin->is($this));

        return $position === false
            ? $gins->first()
            : $gins[($position + 1) % $gins->count()];
    }

    /**
     * Images are either an asset shipped in public/ ("img/classic.webp") or an
     * upload ("storage/gins/…"); asset() handles both.
     */
    public function imageUrl(?string $path): ?string
    {
        return $path ? asset($path) : null;
    }

    /**
     * Keeps slugs URL-safe and unique whichever way the model is saved.
     */
    protected static function booted(): void
    {
        static::saving(function (self $gin) {
            $gin->slug = static::uniqueSlug($gin->slug ?: $gin->name, $gin->id);
        });
    }

    protected static function uniqueSlug(string $source, ?int $ignoreId = null): string
    {
        $base = Str::slug($source) ?: 'gin';
        $slug = $base;
        $suffix = 2;

        while (static::where('slug', $slug)->when($ignoreId, fn ($q) => $q->whereKeyNot($ignoreId))->exists()) {
            $slug = $base . '-' . $suffix++;
        }

        return $slug;
    }
}
