<?php

namespace App\Support;

/**
 * Inline SVG flags, shared by the subscription popup's country-code picker and
 * the storefront location selector.
 *
 * Flags are drawn inline rather than pulled from a flag CDN so the widgets stay
 * self-contained and render with no external requests. The artwork is
 * deliberately simplified — these are read at ~19px, mostly inside a circular
 * mask, so fine detail (crests, eagles) is approximated.
 */
class CountryFlags
{
    /** Prefix for the <symbol> ids emitted by partials/flag-sprite.blade.php. */
    public const SPRITE_PREFIX = 'sgflag-';

    /** ISO 3166-1 alpha-2 => name, calling code and SVG body (viewBox "0 0 24 16"). */
    public const COUNTRIES = [
        'AL' => [
            'name' => 'Albania',
            'dial' => '+355',
            'svg'  => '<rect width="24" height="16" fill="#E41E20"/><path d="M12 4.4 10.1 3.2 10.8 5.3 8.4 4.9 9.7 6.6 8.2 7.6 10.5 8.4 9.3 10 11.2 9.8 10.7 12.4 12 11.3 13.3 12.4 12.8 9.8 14.7 10 13.5 8.4 15.8 7.6 14.3 6.6 15.6 4.9 13.2 5.3 13.9 3.2Z" fill="#000"/>',
        ],
        'AU' => [
            'name' => 'Australia',
            'dial' => '+61',
            'svg'  => '<rect width="24" height="16" fill="#00247D"/><rect width="10" height="7" fill="#012169"/><path d="M0 0 10 7M10 0 0 7" stroke="#fff" stroke-width="1.4"/><path d="M5 0v7M0 3.5h10" stroke="#fff" stroke-width="2.2"/><path d="M5 0v7M0 3.5h10" stroke="#E4002B" stroke-width="1.2"/><g fill="#fff"><circle cx="5" cy="12.5" r="1.5"/><circle cx="15.5" cy="3.5" r="0.8"/><circle cx="18.5" cy="7" r="0.8"/><circle cx="15.5" cy="10.5" r="0.8"/><circle cx="21" cy="11" r="0.7"/><circle cx="19" cy="13" r="0.5"/></g>',
        ],
        'AT' => [
            'name' => 'Austria',
            'dial' => '+43',
            'svg'  => '<rect width="24" height="16" fill="#ED2939"/><rect y="5.33" width="24" height="5.34" fill="#fff"/>',
        ],
        'BE' => [
            'name' => 'Belgium',
            'dial' => '+32',
            'svg'  => '<rect width="8" height="16" fill="#000"/><rect x="8" width="8" height="16" fill="#FAE042"/><rect x="16" width="8" height="16" fill="#ED2939"/>',
        ],
        'BA' => [
            'name' => 'Bosnia and Herzegovina',
            'dial' => '+387',
            'svg'  => '<rect width="24" height="16" fill="#002F6C"/><polygon points="7,0 19,0 19,16" fill="#FECB00"/><g fill="#fff"><circle cx="6.5" cy="1.5" r="0.9"/><circle cx="9" cy="4" r="0.9"/><circle cx="11.5" cy="6.5" r="0.9"/><circle cx="14" cy="9" r="0.9"/><circle cx="16.5" cy="11.5" r="0.9"/><circle cx="19" cy="14" r="0.9"/></g>',
        ],
        'BG' => [
            'name' => 'Bulgaria',
            'dial' => '+359',
            'svg'  => '<rect width="24" height="5.33" fill="#fff"/><rect y="5.33" width="24" height="5.34" fill="#00966E"/><rect y="10.67" width="24" height="5.33" fill="#D62612"/>',
        ],
        'CA' => [
            'name' => 'Canada',
            'dial' => '+1',
            'svg'  => '<rect width="24" height="16" fill="#fff"/><rect width="6" height="16" fill="#D80621"/><rect x="18" width="6" height="16" fill="#D80621"/><path d="M12 3.2 13 5.6 14.6 4.9 13.9 7.3 15.8 6.9 15.2 8.2 16.6 9.3 12.9 10.1 13.1 12.8 12 12 10.9 12.8 11.1 10.1 7.4 9.3 8.8 8.2 8.2 6.9 10.1 7.3 9.4 4.9 11 5.6Z" fill="#D80621"/>',
        ],
        'HR' => [
            'name' => 'Croatia',
            'dial' => '+385',
            'svg'  => '<rect width="24" height="5.33" fill="#FF0000"/><rect y="5.33" width="24" height="5.34" fill="#fff"/><rect y="10.67" width="24" height="5.33" fill="#171796"/><g><rect x="9.6" y="4" width="4.8" height="6" fill="#fff"/><g fill="#FF0000"><rect x="9.6" y="4" width="1.2" height="1.5"/><rect x="12" y="4" width="1.2" height="1.5"/><rect x="10.8" y="5.5" width="1.2" height="1.5"/><rect x="13.2" y="5.5" width="1.2" height="1.5"/><rect x="9.6" y="7" width="1.2" height="1.5"/><rect x="12" y="7" width="1.2" height="1.5"/></g></g>',
        ],
        'CZ' => [
            'name' => 'Czechia',
            'dial' => '+420',
            'svg'  => '<rect width="24" height="8" fill="#fff"/><rect y="8" width="24" height="8" fill="#D7141A"/><polygon points="0,0 11,8 0,16" fill="#11457E"/>',
        ],
        'DK' => [
            'name' => 'Denmark',
            'dial' => '+45',
            'svg'  => '<rect width="24" height="16" fill="#C8102E"/><rect x="8" width="2.8" height="16" fill="#fff"/><rect y="6.6" width="24" height="2.8" fill="#fff"/>',
        ],
        'FR' => [
            'name' => 'France',
            'dial' => '+33',
            'svg'  => '<rect width="8" height="16" fill="#002395"/><rect x="8" width="8" height="16" fill="#fff"/><rect x="16" width="8" height="16" fill="#ED2939"/>',
        ],
        'DE' => [
            'name' => 'Germany',
            'dial' => '+49',
            'svg'  => '<rect width="24" height="5.33" fill="#000"/><rect y="5.33" width="24" height="5.34" fill="#DD0000"/><rect y="10.67" width="24" height="5.33" fill="#FFCE00"/>',
        ],
        'GR' => [
            'name' => 'Greece',
            'dial' => '+30',
            'svg'  => '<rect width="24" height="16" fill="#fff"/><g fill="#0D5EAF"><rect width="24" height="1.78"/><rect y="3.56" width="24" height="1.78"/><rect y="7.11" width="24" height="1.78"/><rect y="10.67" width="24" height="1.78"/><rect y="14.22" width="24" height="1.78"/><rect width="8.9" height="8.9"/></g><path d="M3.55 0v8.9M0 5.34h8.9" stroke="#fff" stroke-width="1.78"/>',
        ],
        'HU' => [
            'name' => 'Hungary',
            'dial' => '+36',
            'svg'  => '<rect width="24" height="5.33" fill="#CE2939"/><rect y="5.33" width="24" height="5.34" fill="#fff"/><rect y="10.67" width="24" height="5.33" fill="#477050"/>',
        ],
        'IE' => [
            'name' => 'Ireland',
            'dial' => '+353',
            'svg'  => '<rect width="8" height="16" fill="#169B62"/><rect x="8" width="8" height="16" fill="#fff"/><rect x="16" width="8" height="16" fill="#FF883E"/>',
        ],
        'IT' => [
            'name' => 'Italy',
            'dial' => '+39',
            'svg'  => '<rect width="8" height="16" fill="#009246"/><rect x="8" width="8" height="16" fill="#fff"/><rect x="16" width="8" height="16" fill="#CE2B37"/>',
        ],
        'XK' => [
            'name' => 'Kosovo',
            'dial' => '+383',
            'svg'  => '<rect width="24" height="16" fill="#244AA5"/><path d="M9 7.5c1-1.4 2.4-1.9 3.6-1.4 1.1.4 1.8 1.5 2.5 2.6.5.8.2 1.7-.6 2-1.5.6-3.4.5-4.8-.3-1-.6-1.3-1.9-.7-2.9Z" fill="#D0A650"/><g fill="#fff"><circle cx="8" cy="4" r="0.7"/><circle cx="10.4" cy="3.1" r="0.7"/><circle cx="12.9" cy="2.8" r="0.7"/><circle cx="15.4" cy="3.1" r="0.7"/><circle cx="17.8" cy="4" r="0.7"/><circle cx="12.9" cy="13" r="0.7"/></g>',
        ],
        'MT' => [
            'name' => 'Malta',
            'dial' => '+356',
            'svg'  => '<rect width="24" height="16" fill="#fff"/><rect x="12" width="12" height="16" fill="#C01B22"/><rect x="1.6" y="1.4" width="4.4" height="4.4" fill="#F2F2F2" stroke="#B9B9B9" stroke-width="0.35"/><path d="M3.3 1.9h1v1.2h1.2v1h-1.2v1.2h-1V4.1H2.1v-1h1.2Z" fill="#9E9E9E"/>',
        ],
        'ME' => [
            'name' => 'Montenegro',
            'dial' => '+382',
            'svg'  => '<rect width="24" height="16" fill="#C40308"/><rect x="0.9" y="0.9" width="22.2" height="14.2" fill="none" stroke="#D4AF3A" stroke-width="1.4"/><path d="M12 4.2 10.4 5.6 8.6 5.2 9.6 6.9 8.6 8.4 10.6 8.8 10 11.6 12 10.4 14 11.6 13.4 8.8 15.4 8.4 14.4 6.9 15.4 5.2 13.6 5.6Z" fill="#D4AF3A"/>',
        ],
        'NL' => [
            'name' => 'Netherlands',
            'dial' => '+31',
            'svg'  => '<rect width="24" height="5.33" fill="#AE1C28"/><rect y="5.33" width="24" height="5.34" fill="#fff"/><rect y="10.67" width="24" height="5.33" fill="#21468B"/>',
        ],
        'MK' => [
            'name' => 'North Macedonia',
            'dial' => '+389',
            'svg'  => '<rect width="24" height="16" fill="#D20000"/><g fill="#F8E92E"><polygon points="12,8 0,1.6 0,0 1.9,0"/><polygon points="12,8 22.1,0 24,0 24,1.6"/><polygon points="12,8 24,14.4 24,16 22.1,16"/><polygon points="12,8 1.9,16 0,16 0,14.4"/><polygon points="12,8 9.8,0 14.2,0"/><polygon points="12,8 9.8,16 14.2,16"/><polygon points="12,8 0,6.4 0,9.6"/><polygon points="12,8 24,6.4 24,9.6"/><circle cx="12" cy="8" r="3.4"/></g>',
        ],
        'NO' => [
            'name' => 'Norway',
            'dial' => '+47',
            'svg'  => '<rect width="24" height="16" fill="#BA0C2F"/><rect x="7.4" width="4" height="16" fill="#fff"/><rect y="6" width="24" height="4" fill="#fff"/><rect x="8.4" width="2" height="16" fill="#00205B"/><rect y="7" width="24" height="2" fill="#00205B"/>',
        ],
        'PL' => [
            'name' => 'Poland',
            'dial' => '+48',
            'svg'  => '<rect width="24" height="8" fill="#fff"/><rect y="8" width="24" height="8" fill="#DC143C"/>',
        ],
        'PT' => [
            'name' => 'Portugal',
            'dial' => '+351',
            'svg'  => '<rect width="24" height="16" fill="#FF0000"/><rect width="9.6" height="16" fill="#006600"/><circle cx="9.6" cy="8" r="3.4" fill="#FFFF00" stroke="#FFF" stroke-width="0.4"/><circle cx="9.6" cy="8" r="1.9" fill="#FF0000"/>',
        ],
        'RO' => [
            'name' => 'Romania',
            'dial' => '+40',
            'svg'  => '<rect width="8" height="16" fill="#002B7F"/><rect x="8" width="8" height="16" fill="#FCD116"/><rect x="16" width="8" height="16" fill="#CE1126"/>',
        ],
        'RS' => [
            'name' => 'Serbia',
            'dial' => '+381',
            'svg'  => '<rect width="24" height="5.33" fill="#C6363C"/><rect y="5.33" width="24" height="5.34" fill="#0C4076"/><rect y="10.67" width="24" height="5.33" fill="#fff"/><path d="M8.4 4.6h4.6v4.2c0 1.5-1 2.5-2.3 3.1-1.3-.6-2.3-1.6-2.3-3.1Z" fill="#C6363C" stroke="#fff" stroke-width="0.5"/>',
        ],
        'SK' => [
            'name' => 'Slovakia',
            'dial' => '+421',
            'svg'  => '<rect width="24" height="5.33" fill="#fff"/><rect y="5.33" width="24" height="5.34" fill="#0B4EA2"/><rect y="10.67" width="24" height="5.33" fill="#EE1C25"/><path d="M6.4 4h4.6v4.2c0 1.5-1 2.5-2.3 3.1-1.3-.6-2.3-1.6-2.3-3.1Z" fill="#EE1C25" stroke="#fff" stroke-width="0.6"/>',
        ],
        'SI' => [
            'name' => 'Slovenia',
            'dial' => '+386',
            'svg'  => '<rect width="24" height="5.33" fill="#fff"/><rect y="5.33" width="24" height="5.34" fill="#005DA4"/><rect y="10.67" width="24" height="5.33" fill="#ED1C24"/><path d="M6.6 3.2h4.4v3.6c0 1.3-.9 2.2-2.2 2.7-1.3-.5-2.2-1.4-2.2-2.7Z" fill="#005DA4" stroke="#fff" stroke-width="0.5"/>',
        ],
        'ES' => [
            'name' => 'Spain',
            'dial' => '+34',
            'svg'  => '<rect width="24" height="16" fill="#AA151B"/><rect y="4" width="24" height="8" fill="#F1BF00"/><rect x="6" y="6" width="3.4" height="4.4" rx="0.5" fill="#AD1519"/>',
        ],
        'SE' => [
            'name' => 'Sweden',
            'dial' => '+46',
            'svg'  => '<rect width="24" height="16" fill="#006AA7"/><rect x="8" width="2.8" height="16" fill="#FECC00"/><rect y="6.6" width="24" height="2.8" fill="#FECC00"/>',
        ],
        'CH' => [
            'name' => 'Switzerland',
            'dial' => '+41',
            'svg'  => '<rect width="24" height="16" fill="#D52B1E"/><rect x="10.6" y="3.4" width="2.8" height="9.2" fill="#fff"/><rect x="7.4" y="6.6" width="9.2" height="2.8" fill="#fff"/>',
        ],
        'TR' => [
            'name' => 'Türkiye',
            'dial' => '+90',
            'svg'  => '<rect width="24" height="16" fill="#E30A17"/><circle cx="9.6" cy="8" r="4" fill="#fff"/><circle cx="11" cy="8" r="3.2" fill="#E30A17"/><path d="M14.4 8 16.9 6.9 16.4 9.6 18.2 7.5 15.4 7.2Z" fill="#fff"/>',
        ],
        'UA' => [
            'name' => 'Ukraine',
            'dial' => '+380',
            'svg'  => '<rect width="24" height="8" fill="#005BBB"/><rect y="8" width="24" height="8" fill="#FFD500"/>',
        ],
        'AE' => [
            'name' => 'United Arab Emirates',
            'dial' => '+971',
            'svg'  => '<rect width="24" height="5.33" fill="#00732F"/><rect y="5.33" width="24" height="5.34" fill="#fff"/><rect y="10.67" width="24" height="5.33" fill="#000"/><rect width="6" height="16" fill="#FF0000"/>',
        ],
        'GB' => [
            'name' => 'United Kingdom',
            'dial' => '+44',
            'svg'  => '<rect width="24" height="16" fill="#012169"/><path d="M0 0 24 16M24 0 0 16" stroke="#fff" stroke-width="3.2"/><path d="M0 0 24 16" stroke="#C8102E" stroke-width="1.9"/><path d="M24 0 0 16" stroke="#C8102E" stroke-width="1.9"/><path d="M12 0v16M0 8h24" stroke="#fff" stroke-width="5.4"/><path d="M12 0v16M0 8h24" stroke="#C8102E" stroke-width="3.2"/>',
        ],
        'US' => [
            'name' => 'United States',
            'dial' => '+1',
            'svg'  => '<rect width="24" height="16" fill="#fff"/><g fill="#B22234"><rect width="24" height="1.23"/><rect y="2.46" width="24" height="1.23"/><rect y="4.92" width="24" height="1.23"/><rect y="7.38" width="24" height="1.23"/><rect y="9.85" width="24" height="1.23"/><rect y="12.31" width="24" height="1.23"/><rect y="14.77" width="24" height="1.23"/></g><rect width="10" height="8.6" fill="#3C3B6E"/><g fill="#fff"><circle cx="1.7" cy="1.5" r="0.55"/><circle cx="4.2" cy="1.5" r="0.55"/><circle cx="6.7" cy="1.5" r="0.55"/><circle cx="2.9" cy="3.3" r="0.55"/><circle cx="5.5" cy="3.3" r="0.55"/><circle cx="8" cy="3.3" r="0.55"/><circle cx="1.7" cy="5.1" r="0.55"/><circle cx="4.2" cy="5.1" r="0.55"/><circle cx="6.7" cy="5.1" r="0.55"/><circle cx="2.9" cy="6.9" r="0.55"/><circle cx="5.5" cy="6.9" r="0.55"/><circle cx="8" cy="6.9" r="0.55"/></g>',
        ],
    ];

    /**
     * @return array<string, array{name: string, dial: string, svg: string}>
     */
    public static function all(): array
    {
        return self::COUNTRIES;
    }

    public static function has(?string $iso): bool
    {
        return $iso !== null && isset(self::COUNTRIES[strtoupper($iso)]);
    }

    public static function name(?string $iso): ?string
    {
        return self::COUNTRIES[strtoupper((string) $iso)]['name'] ?? null;
    }

    public static function svg(?string $iso): ?string
    {
        return self::COUNTRIES[strtoupper((string) $iso)]['svg'] ?? null;
    }

    /**
     * The <symbol> id used to reference a flag, e.g. "sgflag-MK".
     */
    public static function spriteId(string $iso): string
    {
        return self::SPRITE_PREFIX . strtoupper($iso);
    }

    /**
     * Codes sorted by country name, for admin select menus.
     *
     * @return array<string, string>  ISO => name
     */
    public static function options(): array
    {
        return array_map(fn (array $c): string => $c['name'], self::COUNTRIES);
    }
}
