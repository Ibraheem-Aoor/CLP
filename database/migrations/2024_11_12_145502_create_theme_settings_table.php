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
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('accent_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('background_color')->nullable();
            $table->boolean('is_rtl');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_settings');
    }
};
