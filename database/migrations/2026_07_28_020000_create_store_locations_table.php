<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('store_locations', function (Blueprint $table) {
            $table->id();

            $table->string('name');                       // "United States", "UAE, Dubai"
            $table->string('region');                     // "Europe", "Asia, Middle East"

            $table->string('flag_code', 2)->nullable();   // ISO code rendered from the flag sprite
            $table->string('flag_image')->nullable();     // optional upload, wins over flag_code

            // Nullable: some markets are listed before a shop link exists.
            $table->string('store_url')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('opens_in_new_tab')->default(true);

            $table->timestamps();

            $table->index(['region', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_locations');
    }
};
