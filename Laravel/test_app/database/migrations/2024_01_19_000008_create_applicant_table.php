<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applicant', function (Blueprint $table) {
            $table->id('ApplicantID');
            $table->string('AppLastName');
            $table->string('AppFirstName');
            $table->string('AppMiddleName')->nullable();
            $table->string('Suffix')->nullable();

            $table->date('Birthday');
            $table->string('Address')->nullable();
            $table->float('Grades');
            $table->string('EducAttainment');
            $table->integer('ContactNo')->nullable();
            $table->string('Email')->nullable();
            $table->string('Gender')->nullable();

            $table->unsignedBigInteger('ApplicantChoiceID');
            $table->foreign('ApplicantChoiceID')->references('ApplicantChoiceID')->on('applicantchoice')->onDelete('cascade');
            $table->unsignedBigInteger('ApplicantTypeID');
            $table->foreign('ApplicantTypeID')->references('ApplicantTypeID')->on('applicanttype')->onDelete('cascade');
            $table->unsignedBigInteger('ApprovalID')->nullable();
            $table->foreign('ApprovalID')->references('ApprovalID')->on('approval')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant');
    }
};
