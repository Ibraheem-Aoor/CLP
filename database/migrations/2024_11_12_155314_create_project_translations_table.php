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
        Schema::create('project_translations', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name');
            $table->text('description');
            $table->string(column: 'key');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();
            $table->string('lang');
            $table->unique(['project_id' , 'lang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_translations');
    }
};
