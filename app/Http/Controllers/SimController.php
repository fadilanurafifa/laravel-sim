<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimController extends Controller
{
    public function getSimData()
    {
        // Menghitung jumlah pengguna yang sudah dan belum mengajukan SIM
        $sudahMengajukan = DB::table('catatan')->where('status', 'Sudah Mengajukan')->count();
        $belumMengajukan = DB::table('catatan')->where('status', 'Belum Mengajukan')->count();

        // Format data dalam array untuk dikirim ke frontend
        $data = [
            ['status' => 'Sudah Mengajukan', 'count' => $sudahMengajukan],
            ['status' => 'Belum Mengajukan', 'count' => $belumMengajukan]
        ];

        return response()->json($data); // Mengirimkan data sebagai JSON
    }
}
