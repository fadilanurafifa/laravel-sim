<?php

namespace App\Http\Controllers;
use App\Models\Catatan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard');
    // }
    
    public function index()
    {
        // Menghitung total pengajuan SIM
        $jumlahPengajuan = Catatan::count();

        // Hitung total pengajuan SIM per hari untuk grafik
        $submissionsPerDay = DB::table('catatans') // Ganti dengan nama tabel yang sesuai
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Kembalikan ke view dashboard dengan data yang diperlukan
        return view('dashboard', compact('jumlahPengajuan', 'submissionsPerDay'));
    }

}

