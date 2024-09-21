<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiEktp extends Model
{
    use HasFactory;

    protected $table = 'verifikasi_ektp'; // Menentukan tabel yang digunakan

    protected $fillable = ['nama', 'nik', 'file_ektp_path']; // Kolom yang dapat diisi
}
