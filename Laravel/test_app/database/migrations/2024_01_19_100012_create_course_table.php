<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id('CourseID');
            $table->string('CourseName');
            $table->integer('TotalCredits');    

            $table->unsignedBigInteger('SubjectID');
            $table->foreign('SubjectID')->references('SubjectID')->on('subject')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
