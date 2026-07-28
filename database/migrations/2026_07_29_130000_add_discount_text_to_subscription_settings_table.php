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
        Schema::table('subscription_settings', function (Blueprint $table) {
            // The offer wording in the popup, e.g. "10% OFF".
            $table->string('discount_text', 60)->default('10% OFF')->after('discount_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subscription_settings', function (Blueprint $table) {
            $table->dropColumn('discount_text');
        });
    }
};
