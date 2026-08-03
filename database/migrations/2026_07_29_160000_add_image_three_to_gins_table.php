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
        Schema::table('gins', function (Blueprint $table) {
            // Sits to the right of the third section ("How To Enjoy It") —
            // the generated pages have no cocktail modals to fill that space.
            $table->string('image_three')->nullable()->after('body_three');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gins', function (Blueprint $table) {
            $table->dropColumn('image_three');
        });
    }
};
