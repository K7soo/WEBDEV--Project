<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->id('SubjectID');
            $table->string('SubjectCode');
            $table->string('SubjectName');
            $table->unsignedBigInteger('YearLevelID')->nullable();
            $table->foreign('YearLevelID')->references('YearLevelID')->on('yearlevel')->onDelete('cascade');
            $table->unsignedBigInteger('SemesterID')->nullable();
            $table->foreign('YearLevelID')->references('SemesterID')->on('semester')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject');
    }
};
