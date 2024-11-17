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
        Schema::create('project_team_translations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lang');
            $table->unsignedBigInteger('project_team_id');
            $table->foreign('project_team_id')->references('id')->on('project_teams')->cascadeOnDelete();
            $table->unique(['lang' , 'project_team_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_team_translations');
    }
};
