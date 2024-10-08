<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')->get(); // Mengambil semua data pengguna dari tabel users
        return view('registered-users', ['users' => $users]);
    }
    
}
