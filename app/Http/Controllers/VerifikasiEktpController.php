<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VerifikasiEktp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class VerifikasiEktpController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Masuk ke store method');
    
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|size:16|unique:verifikasi_ektp,nik',
            'file_ektp' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
    
        if ($request->nama == Auth::user()->name) {
            try {
                $file = $request->file('file_ektp');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/ektp/', $filename);
    
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => $filename,
                    'status' => 'berhasil',
                ]);
    
                Log::info('Data berhasil disimpan, menuju redirect');
    
                return redirect()->route('verifikasi-sukses')->with('success', 'Verifikasi e-KTP berhasil dikirim!');
            } catch (\Exception $e) {
                VerifikasiEktp::create([
                    'nama' => $validatedData['nama'],
                    'nik' => $validatedData['nik'],
                    'file_ektp_path' => null,
                    'status' => 'gagal',
                ]);
    
                Log::error('Gagal menyimpan data: ' . $e->getMessage());
    
                return redirect()->route('verifikasi-sukses')->with('error', 'Terjadi kesalahan saat menyimpan data.');
            }
        } else {
            Log::warning('Nama tidak sesuai dengan pengguna yang login');
            return redirect()->back()->with('error', 'Nama tidak sesuai dengan pengguna yang sedang login.');
        }
    }
    public function showAllEktp()
{
    // Mengambil semua data e-KTP dari tabel verifikasi_ektp
    $verifikasis = VerifikasiEktp::all();

    // Mengirim data ke view 'show-ektp'
    return view('show-ektp', compact('verifikasis'));
}
}
