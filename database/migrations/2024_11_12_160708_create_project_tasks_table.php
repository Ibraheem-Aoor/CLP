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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->date('due_date');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('assigned_to');
            $table->unsignedBigInteger('status_id');
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();
            $table->foreign('assigned_to')->references('id')->on('project_team_members')->cascadeOnDelete();
            $table->foreign('status_id')->references('id')->on('statuses')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tasks');
    }
};
