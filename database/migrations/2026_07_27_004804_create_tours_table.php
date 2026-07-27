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
Schema::create('tours', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('category')->nullable();
    $table->string('duration');
    $table->string('price');
    $table->text('availability');
    $table->string('capacity')->nullable();
    $table->longText('description');
    $table->string('image')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
