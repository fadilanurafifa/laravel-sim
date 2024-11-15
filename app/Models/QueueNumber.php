<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueueNumber extends Model
{
    use HasFactory;

    protected $table = 'queue_numbers'; // Nama tabel

    protected $fillable = [
        'user_id', 
        'queue_number',
    ];
}
