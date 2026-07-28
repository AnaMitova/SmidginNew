<?php

namespace App\Models;

use App\Support\CountryFlags;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class StoreLocation extends Model
{
    /**
     * Regions offered in the admin dropdown. Admins may type their own instead,
     * so treat this as suggestions rather than an enum.
     */
    public const REGIONS = [
        'North America',
        'South America',
        'Europe',
        'Asia, Middle East',
        'Asia',
        'Middle East',
        'Africa',
        'Oceania',
    ];

    protected $fillable = [
        'name',
        'region',
        'flag_code',
        'flag_image',
        'store_url',
        'sort_order',
        'is_active',
        'opens_in_new_tab',
    ];

    protected $casts = [
        'is_active'        => 'boolean',
        'opens_in_new_tab' => 'boolean',
        'sort_order'       => 'integer',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Regions keep the order of their lowest-sorted location, so admins control
     * both the order of the groups and the order within them.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Active locations grouped by region, ready for the storefront modal.
     *
     * @return Collection<string, Collection<int, static>>
     */
    public static function groupedByRegion(): Collection
    {
        return static::query()->active()->ordered()->get()->groupBy('region');
    }

    /**
     * True when the flag should be drawn from the shared SVG sprite.
     */
    public function usesSpriteFlag(): bool
    {
        return $this->flag_image === null && CountryFlags::has($this->flag_code);
    }

    /**
     * The sprite symbol id for this location, e.g. "sgflag-DE".
     */
    public function getFlagSpriteIdAttribute(): ?string
    {
        return $this->usesSpriteFlag() ? CountryFlags::spriteId($this->flag_code) : null;
    }
}
