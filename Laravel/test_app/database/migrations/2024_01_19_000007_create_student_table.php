<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('StudentID');
            $table->string('StudentNo');
            $table->string('StudLastName');
            $table->string('StudFirstName');
            $table->string('StudMiddleName')->nullable();
            $table->string('Suffix')->nullable();

            $table->unsignedBigInteger('CourseID');
            $table->foreign('CourseID')->references('CourseID')->on('course')->onDelete('cascade');
            $table->unsignedBigInteger('SectionID')->nullable();
            $table->foreign('SectionID')->references('SectionID')->on('section')->onDelete('cascade');
            $table->string('Status');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
