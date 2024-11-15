<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika perlu
    protected $table = 'transactions';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
       'user_id', 'payment_amount', 'jenis_sim', 'payment_method', 'payment_proof'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
