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
        Schema::create('project_task_translations', function (Blueprint $table) {
            $table->id();
            $table->mediumText('title');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('project_task_id');
            $table->foreign('project_task_id')->references('id')->on('project_tasks')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_task_translations');
    }
};
