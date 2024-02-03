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
        Schema::create('account', function (Blueprint $table) {
            $table->id('AccountID');
            $table->string('Email'); // webmail of student dictated by admin
            $table->string('Password');
            $table->string('accountType');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
