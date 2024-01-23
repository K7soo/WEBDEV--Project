<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applicantchoice', function (Blueprint $table) {
            $table->id('ApplicantChoiceID');
            
            $table->unsignedBigInteger('CourseID');
            $table->foreign('CourseID')->references('CourseID')->on('course')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicantchoice');
    }
};
