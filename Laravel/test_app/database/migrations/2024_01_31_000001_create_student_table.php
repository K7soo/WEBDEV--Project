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
            $table->string('Gender');

            $table->unsignedBigInteger('StatusID')->nullable();
            $table->foreign('StatusID')->references('StatusID')->on('status')->onDelete('cascade');
            $table->unsignedBigInteger('AccountID')->nullable();
            $table->foreign('AccountID')->references('AccountID')->on('account')->onDelete('cascade');
            $table->unsignedBigInteger('YearLevelID')->nullable();
            $table->foreign('YearLevelID')->references('YearLevelID')->on('yearlevels')->onDelete('cascade');
            $table->unsignedBigInteger('CourseID')->nullable();
            $table->foreign('CourseID')->references('CourseID')->on('course')->onDelete('cascade');
            $table->unsignedBigInteger('SectionID')->nullable();
            $table->foreign('SectionID')->references('SectionID')->on('section')->onDelete('cascade');


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
