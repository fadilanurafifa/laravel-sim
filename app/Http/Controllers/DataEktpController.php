<?php

namespace App\Http\Controllers;

use App\Models\VerifikasiEktp; // Import model
use Illuminate\Http\Request;

class DataEktpController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel verifikasi_ektp
        $dataEktp = VerifikasiEktp::all();

        // Kirim data ke view
        return view('data_ektp.index', compact('dataEktp'));
    }
}

