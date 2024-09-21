<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('catatans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nomor_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('golongan_darah');
            $table->string('pendidikan');
            $table->string('jenis_sim');
            $table->date('tanggal_pengajuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('catatans');
    }
};
