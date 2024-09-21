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
        Schema::create('verifikasi_ektp', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Kolom untuk menyimpan nama lengkap
            $table->string('nik', 16); // Kolom untuk menyimpan NIK
            $table->string('file_ektp_path'); // Kolom untuk menyimpan path file e-KTP yang diupload
            $table->timestamps(); // Kolom untuk menyimpan waktu pembuatan dan update data
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_ektp');
    }
};
