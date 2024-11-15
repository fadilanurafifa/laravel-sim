<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    // Menampilkan detail aktivitas pengguna yang sedang login
    public function activityDetails()
    {
        // Ambil semua aktivitas untuk pengguna yang sedang login, termasuk login, logout, dan pengajuan
        $activities = Activity::where('user_id', Auth::id())
            ->orderBy('activity_time', 'desc')
            ->paginate(10); // 10 aktivitas per halaman
    
        // Mengambil total login, logout, dan pengajuan untuk pengguna tersebut
        $totalLogins = Activity::where('user_id', Auth::id())
            ->where('activity_name', 'Login')
            ->count();
        $totalActivities = $activities->total(); // Menghitung total aktivitas pada halaman yang dipaginate

        // Kembalikan view dengan data aktivitas untuk pengguna tersebut
        return view('activity_details', compact('activities', 'totalLogins', 'totalActivities'));
    }
}
