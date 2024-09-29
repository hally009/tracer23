<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('id_akun')->unique();
            $table->string('nim', 8)->unique(); // NIM (max length 20 characters)
            $table->string('nama', 100); // Nama (max length 100 characters)
            $table->string('prodi', 50); // Prodi (max length 50 characters)
            $table->string('nik', 16)->unique(); // NIK (16 characters)
            $table->string('npwp', 16)->nullable(); // NPWP (max length 15 characters, nullable)
            $table->string('no_ijazah', 15)->unique(); // No Ijazah (max length 30 characters)
            $table->string('no_hp', 15)->nullable(); // No HP (max length 15 characters, nullable)
            $table->string('email', 100)->unique(); // Email (max length 100 characters)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
};
