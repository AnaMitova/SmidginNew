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
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('email')->unique();

            $table->string('country_iso', 2)->default('MK');
            $table->string('country_code', 8)->default('+389');
            $table->string('phone');

            $table->string('discount_code')->default('WELCOME8');

            $table->string('source')->nullable();
            $table->string('ip_address', 45)->nullable();

            $table->string('status')->default('Subscribed');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribers');
    }
};
