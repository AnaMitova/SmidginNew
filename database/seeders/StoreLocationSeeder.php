<?php

namespace Database\Seeders;

use App\Models\StoreLocation;
use Illuminate\Database\Seeder;

/**
 * Seeds the locations that were previously hardcoded in the
 * findourstores page's "Select a Location" modal.
 *
 * Serbia, Montenegro and UAE had no shop link in the original markup, so they
 * are seeded without one and render as non-clickable pills until a URL is set
 * in the admin panel.
 */
class StoreLocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            ['United States', 'North America',    'US', 'https://potomacwines.com/spirits/gin/smidgin-small-batch-gin'],

            ['Serbia',        'Europe',           'RS', null],
            ['Montenegro',    'Europe',           'ME', null],
            ['Slovenia',      'Europe',           'SI', 'https://makedonija-trade.si/izdelek/premium-gin-smidgin-07-l/'],
            ['Italy',         'Europe',           'IT', 'https://alambicco.shop/gin/14-smidgin-classico.html'],
            ['Germany',       'Europe',           'DE', 'https://sunny-taste.de/'],
            ['Switzerland',   'Europe',           'CH', 'https://www.gin-garage.ch/?s=smidgin'],
            ['Malta',         'Europe',           'MT', 'https://imbierekwines.com/'],

            ['UAE, Dubai',    'Asia, Middle East', 'AE', null],
            ['Australia',     'Asia, Middle East', 'AU', 'https://www.virtualliquor.com.au/product/smidgin-gin-classic-700ml/'],
        ];

        foreach ($locations as $position => [$name, $region, $flagCode, $storeUrl]) {
            StoreLocation::updateOrCreate(
                ['name' => $name, 'region' => $region],
                [
                    'flag_code'        => $flagCode,
                    'store_url'        => $storeUrl,
                    'sort_order'       => $position + 1,
                    'is_active'        => true,
                    'opens_in_new_tab' => true,
                ]
            );
        }
    }
}
