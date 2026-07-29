<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gins', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            // Look of the card / page.
            $table->string('accent_color')->default('#EF4135');
            $table->string('name_font')->default('font-montserrat');
            $table->string('wordmark_image')->nullable();
            $table->string('card_image')->nullable();
            $table->string('bottle_image')->nullable();

            $table->text('tagline')->nullable();
            $table->string('buy_url')->nullable();

            // Body of the generated page. Ignored when custom_path is set.
            $table->string('heading_one')->nullable();
            $table->text('body_one')->nullable();
            $table->string('heading_two')->nullable();
            $table->text('body_two')->nullable();
            $table->string('heading_three')->nullable();
            $table->text('body_three')->nullable();

            // Set for the five hand-built pages (/classic, /velvet, …) so their
            // cards keep pointing at those instead of a generated page.
            $table->string('custom_path')->nullable();

            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('active')->default(true);

            $table->timestamps();
        });

        // The gins already on the site, in the order the home carousel shows them.
        // Every row needs the same columns — a bulk insert takes one shape.
        $now = now();

        $defaults = [
            'wordmark_image' => null,
            'created_at' => $now,
            'updated_at' => $now,
        ];

        DB::table('gins')->insert(array_map(fn ($gin) => $gin + $defaults, [
            [
                'name' => 'Classic',
                'slug' => 'classic',
                'accent_color' => '#EF4135',
                'name_font' => 'font-montserrat',
                'card_image' => 'img/Screenshot 2025-09-20 at 04.39.20.webp',
                'bottle_image' => 'img/classic.webp',
                'tagline' => 'A premium one-shot London Dry Gin made with wild juniper berries and mountain tea — distilled in small batches in the heart of Skopje.',
                'buy_url' => 'https://smidgin-shop.myshopify.com/products/smidgin-classic-london-dry-gin-1',
                'custom_path' => '/classic',
                'sort_order' => 1,
            ],
            [
                'name' => 'Velvet',
                'slug' => 'velvet',
                'accent_color' => '#4D2957',
                'name_font' => 'font-Velvet',
                'wordmark_image' => 'sliki/velvetFont.png',
                'card_image' => 'img/velvet.jpeg',
                'bottle_image' => 'sliki/velvett.webp',
                'tagline' => 'A premium colored gin distilled in Skopje — with blueberry, butterfly pea, and lavender — slow-distilled in copper stills and sweetened naturally.',
                'buy_url' => 'https://smidgin-shop.myshopify.com/products/smidgin-velvet-single-700ml-bottle',
                'custom_path' => '/velvet',
                'sort_order' => 2,
            ],
            [
                'name' => 'Orient',
                'slug' => 'orient',
                'accent_color' => '#821A16',
                'name_font' => 'font-Papyrus',
                'card_image' => 'sliki/orient.webp',
                'bottle_image' => 'sliki/orient.webp',
                'tagline' => 'A spiced gin inspired by oriental flavors — crafted in Skopje with notes of nutmeg, star anise, cinnamon, and sweet citrus.',
                'buy_url' => 'https://smidgin-shop.myshopify.com/products/smidgin-orient-gin-700ml',
                'custom_path' => '/orient',
                'sort_order' => 3,
            ],
            [
                'name' => 'Light',
                'slug' => 'light',
                'accent_color' => '#4164AD',
                'name_font' => 'font-montserrat',
                'card_image' => 'img/Screenshot 2025-11-06 at 01.34.38.webp',
                'bottle_image' => 'sliki/light.webp',
                'tagline' => 'A lighter spirit crafted with the same Macedonian soul — distilled with juniper, citrus, and wild mountain tea.',
                'buy_url' => 'https://smidgin-shop.myshopify.com/products/smidgin-light-gin-700ml',
                'custom_path' => '/light',
                'sort_order' => 4,
            ],
            [
                'name' => 'XO',
                'slug' => 'xo',
                'accent_color' => '#A24B1E',
                'name_font' => 'font-Baskervville',
                'card_image' => 'sliki/xo.webp',
                'bottle_image' => 'sliki/xoPola.webp',
                'tagline' => 'An extraordinary barrel-aged gin — rested in Cabernet Sauvignon casks for layers of smooth oak, fruit, and warm spice.',
                'buy_url' => 'https://smidgin-shop.myshopify.com/',
                'custom_path' => '/xo',
                'sort_order' => 5,
            ],
        ]));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gins');
    }
};
