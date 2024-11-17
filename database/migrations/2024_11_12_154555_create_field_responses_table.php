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
        Schema::create('field_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_response_id');
            $table->unsignedBigInteger('field_id');
            $table->foreign('form_response_id')->references('id')->on('form_responses')->cascadeOnDelete();
            $table->foreign('field_id')->references('id')->on('fields')->cascadeOnDelete();
            $table->text('value')->nullable(); // The value submitted by the user for this field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_responses');
    }
};
