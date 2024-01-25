<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('section', function (Blueprint $table) {
            $table->id('SectionID');
            $table->string('SectionNo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section');
    }
};
