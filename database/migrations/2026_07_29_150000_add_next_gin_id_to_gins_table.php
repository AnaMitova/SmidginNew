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
            // Which gin the teaser at the bottom of this gin's page shows.
            // Null keeps the old behaviour: the next one in carousel order.
            // Kept constraint-free — the model clears stale references itself,
            // which SQLite handles more gracefully than an ALTER with a key.
            $table->unsignedBigInteger('next_gin_id')->nullable()->after('custom_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gins', function (Blueprint $table) {
            $table->dropColumn('next_gin_id');
        });
    }
};
