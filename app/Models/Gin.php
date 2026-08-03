<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
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
        'image_three',
        'custom_path',
        'next_gin_id',
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
     * The gin shown by the teaser at the bottom of this gin's page — the one
     * picked in the admin panel, otherwise the next in carousel order,
     * wrapping back to the first.
     */
    public function nextGin(): ?self
    {
        if ($this->next_gin_id) {
            $chosen = static::active()->find($this->next_gin_id);

            // A gin that was hidden or deleted meanwhile falls through to the
            // running order rather than leaving a hole at the bottom of the page.
            if ($chosen && ! $chosen->is($this)) {
                return $chosen;
            }
        }

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
     * Renders the little markup the panel allows inside headings and body text:
     * *word* paints a word in the gin's colour, **word** makes it bold.
     * The text is escaped first, so nothing else can slip through.
     */
    public function highlight(?string $text): HtmlString
    {
        $html = e((string) $text);

        $html = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $html);
        $html = preg_replace(
            '/\*(.+?)\*/s',
            '<span style="color: ' . e($this->accent_color) . '">$1</span>',
            $html
        );

        return new HtmlString(nl2br($html));
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

        // Nobody should keep pointing their teaser at a gin that is gone.
        static::deleted(function (self $gin) {
            static::where('next_gin_id', $gin->id)->update(['next_gin_id' => null]);
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
