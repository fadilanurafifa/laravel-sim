<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catatan extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'nomor_ktp',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'golongan_darah',
        'pendidikan',
        'jenis_sim',
        'tanggal_pengajuan',
        'kk',
        'ktp',
        'pas_foto',
    ];

    public $timestamps = true;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
