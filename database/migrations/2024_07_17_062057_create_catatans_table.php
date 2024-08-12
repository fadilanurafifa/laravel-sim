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
        Schema::create('catatans', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->string('nomor_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'D1', 'D3', 'S1', 'S2', 'S3']);
            $table->enum('jenis_sim', ['SIM A', 'SIM B1', 'SIM B2', 'SIM C', 'SIM D']);
            $table->date('tanggal_pengajuan');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatans');
    }
};
