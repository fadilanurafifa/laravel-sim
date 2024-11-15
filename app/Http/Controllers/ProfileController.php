<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // Tambahkan ini jika menggunakan Query Builder

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function updatePassword(Request $request)
{
    $request->validate([
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user = Auth::user();

    if ($user) {
        try {
            // Update password menggunakan query builder
            DB::table('users')->where('id', $user->id)->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->back()->with('success', 'Password updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update password. Error: ' . $e->getMessage());
        }
    } else {
        return redirect()->back()->with('error', 'User not found.');
    }
}

}

