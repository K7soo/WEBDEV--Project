@ -1,32 +0,0 @@
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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('ContactsID');
            $table->string('Address')->nullable();
            $table->string('Email');
            $table->integer('ContactNo');
            $table->integer('Parents/Guardian');
            $table->integer('P_ContactNo')->nullable();
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};