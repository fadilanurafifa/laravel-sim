<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifikasiEktp;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class VerifikasiEktpController extends Controller
{
    public function store(Request $request)
{
    // Validasi data input
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|string|size:16',
        'file_ektp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Simpan file e-KTP yang diupload
    $filePath = $request->file('file_ektp')->store('uploads/ektp', 'public');

    // Simpan data ke database
    VerifikasiEktp::create([
        'nama' => $validatedData['nama'],
        'nik' => $validatedData['nik'],
        'file_ektp_path' => $filePath,
    ]);

    return redirect()->route('verifikasi.sukses')->with('success', 'Verifikasi e-KTP berhasil dikirim!');
}
}
