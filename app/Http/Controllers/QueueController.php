<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QueueNumber;
use Illuminate\Support\Facades\Auth;

class QueueController extends Controller
{
    public function ambilAntrian(Request $request)
{
    $user = Auth::user();

    // Periksa apakah pengguna sudah memiliki nomor antrian
    $existingQueue = QueueNumber::where('user_id', $user->id)->first();

    if ($existingQueue) {
        // Jika pengguna sudah memiliki nomor antrian, tampilkan pesan
        return response()->json([
            'status' => 'error',
            'message' => 'Anda sudah memiliki nomor antrian: ' . $existingQueue->queue_number,
        ]);
    } else {
        // Jika belum, buat nomor antrian baru dan simpan ke database
        $newQueueNumber = rand(1, 100);
        QueueNumber::create([
            'user_id' => $user->id,
            'queue_number' => $newQueueNumber,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Nomor Antrian Anda adalah ' . $newQueueNumber,
        ]);
    }
}
}
