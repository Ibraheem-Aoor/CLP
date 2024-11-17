<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('slug_translations', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->string('lang');
            $table->unsignedBigInteger('slug_id');
            $table->foreign('slug_id')->references('id')->on('slugs');
            $table->unique(['slug_id', 'lang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slug_translations');
    }
};
