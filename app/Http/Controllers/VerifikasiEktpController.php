<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifikasiEktp;
use Illuminate\Support\Facades\Auth;

class VerifikasiEktpController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:verifikasi_ektp,nik',
            'file_ektp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ], [
            'nik.size' => 'NIK harus terdiri dari 16 karakter.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'file_ektp.mimes' => 'File harus berupa JPG, JPEG, PNG, atau PDF.',
            'file_ektp.max' => 'Ukuran file maksimal adalah 2MB.'
        ]);

        if ($request->nama == Auth::user()->name) {
            try {
                // Simpan file e-KTP yang diupload
                $filePath = $request->file('file_ektp')->store('uploads/ektp', 'public');

                // Simpan data ke database dengan status 'berhasil'
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => $filePath,
                    'status' => 'berhasil', // Pastikan status disimpan
                ]);

                return redirect()->route('verifikasi.sukses')->with('success', 'Verifikasi e-KTP berhasil dikirim!');
            } catch (\Exception $e) {
                // Jika ada error, simpan data dengan status 'gagal'
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => $filePath ?? null, // Jika file gagal disimpan
                    'status' => 'gagal', // Pastikan status disimpan
                ]);

                return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
            }
            try {
                // Simpan file e-KTP yang diupload
                $filePath = $request->file('file_ektp')->store('uploads/ektp', 'public');

                // Simpan data ke database dengan status 'berhasil'
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => $filePath,
                    'status' => 'berhasil', // Pastikan status disimpan
                ]);

                return redirect()->route('verifikasi.sukses')->with('success', 'Verifikasi e-KTP berhasil dikirim!');
            } catch (\Exception $e) {
                // Jika ada error, simpan data dengan status 'gagal'
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => $filePath ?? null, // Jika file gagal disimpan
                    'status' => 'gagal', // Pastikan status disimpan
                ]);

                return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
            }
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }
    public function showDataVerifikasi()
    {
        $dataEktp = VerifikasiEktp::all(); // Mengambil semua data verifikasi
        return view('path.to.your.view', compact('dataEktp')); // Sesuaikan dengan path view yang benar
    }
}
