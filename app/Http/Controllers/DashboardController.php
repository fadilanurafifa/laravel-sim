<?php

namespace App\Http\Controllers;
use App\Models\Catatan;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     return view('dashboard');
    // }
    
    public function index()
{
    $jumlahPengajuan = Catatan::count(); // Menghitung jumlah pengajuan
    return view('dashboard', compact('jumlahPengajuan'));
}
}
