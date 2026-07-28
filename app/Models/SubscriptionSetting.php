<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Throwable;

/**
 * Settings for the subscription popup — a single row, edited from the
 * "Претплатници" tab of the admin panel.
 */
class SubscriptionSetting extends Model
{
    /**
     * Used when no row exists yet (fresh install).
     */
    public const DEFAULT_DISCOUNT_CODE = 'WELCOME8';
    public const DEFAULT_DISCOUNT_TEXT = '10% OFF';

    protected $fillable = [
        'discount_code',
        'discount_text',
    ];

    /**
     * Resolved once per request — the popup asks for several values.
     */
    protected static ?self $cached = null;

    /**
     * The one and only settings row, created on first use.
     */
    public static function current(): self
    {
        return static::$cached ??= static::firstOrCreate([], [
            'discount_code' => self::DEFAULT_DISCOUNT_CODE,
            'discount_text' => self::DEFAULT_DISCOUNT_TEXT,
        ]);
    }

    /**
     * Code handed out by the subscription popup.
     */
    public static function discountCode(): string
    {
        return static::value('discount_code', self::DEFAULT_DISCOUNT_CODE);
    }

    /**
     * Offer wording shown in the popup and on the launcher pill.
     */
    public static function discountText(): string
    {
        return static::value('discount_text', self::DEFAULT_DISCOUNT_TEXT);
    }

    /**
     * The popup renders on every public page, so a missing table or column
     * (migration not run yet) falls back to the default instead of breaking
     * the site.
     */
    protected static function value(string $column, string $fallback): string
    {
        try {
            return static::current()->{$column} ?: $fallback;
        } catch (Throwable $e) {
            return $fallback;
        }
    }
}
