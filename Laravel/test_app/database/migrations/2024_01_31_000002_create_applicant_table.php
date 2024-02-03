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
            $table->string('Gender')->nullable();

            /* 

            Contact Info -> ContactInfo Table 
                $table->string('Address')->nullable();
                $table->string('Email')->nullable();
                $table->integer('ContactNo')->nullable();
                $table->integer('Parents/Guardian');
                $table->integer('P_ContactNo')->nullable();

            Education Background Info -> EducBackground
                $table->float('Grades');
                $table->string('EducAttainment');
                $table->string('School');
            
            Account
                Email
                SetPassword
            */
            
            $table->unsignedBigInteger('ContactsID')->nullable();
            $table->foreign('ContactsID')->references('ContactsID')->on('contacts')->onDelete('cascade');

            $table->unsignedBigInteger('EducID')->nullable();
            $table->foreign('EducID')->references('EducID')->on('educationbg')->onDelete('cascade');

            $table->unsignedBigInteger('AccountID')->nullable();
            $table->foreign('AccountID')->references('AccountID')->on('account')->onDelete('cascade');
        
            $table->unsignedBigInteger('ApplicantChoiceID')->nullable();
            $table->foreign('ApplicantChoiceID')->references('ApplicantChoiceID')->on('applicantchoice')->onDelete('cascade');

            $table->unsignedBigInteger('ApplicantTypeID')->nullable();
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
