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
        Schema::create('blog_category_translations', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title');
            $table->mediumText('description');
            $table->string('lang');
            $table->unsignedBigInteger('blog_category_id');
            $table->foreign('blog_category_id')->references('id')->on('blog_categories');
            $table->unique(['blog_category_id', 'lang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_category_translations');
    }
};
