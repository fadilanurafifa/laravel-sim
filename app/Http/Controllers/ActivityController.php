<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    public function activityDetails()
    {
        // Ambil aktivitas login dan logout pengguna yang sedang login
        $activities = Activity::where('user_id', Auth::id())
            ->orderBy('activity_time', 'desc')
            ->get();
    
        // Kembalikan view dengan variabel $activities
        return view('activity_details', compact('activities'));
    }
}

