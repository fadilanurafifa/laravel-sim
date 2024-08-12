<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatecatatanRequest;
use App\Models\catatan;
use App\Models\SimData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){

        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=>'Email Wajib Diisi!',
            'password.required'=>'Password Wajib Diisi!'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('dashboard')->with('Success', Auth::user()->name . ' Berhasil Login!');
        } else {
            return redirect('sesi')->withErrors(['message' => 'Username dan password yang dimasukkan tidak valid']);

        }
    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('Success', 'Berhasil Logout');
    }

    function register(){
        return view('sesi/register');

    }
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required'=>'Nama Wajib Diisi!',
            'email.required'=>'Email Wajib Diisi!',
            'email.email'=>'Silahkan Masukan Email Yang Valid!',
            'email.unique'=>'Email Sudah Pernah Digunakan!',
            'password.required'=>'Password Wajib Diisi!',
            'password.min'=>'Minimum Password Yang Diizinkan Adalah 6 Karakter!'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('dashboard')->with('Success', Auth::user()->name .  ' Berhasil Register!');
        } else {
            return redirect('sesi')->withErrors(['message' => 'Username dan password yang dimasukkan tidak valid']);
        }
    }

    function update(Request $request, $id){
        $request->validate([
            'nik' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi_dituju' => 'required',
            'suhu' => 'required',
        ]);
        catatan::where('id', $id)->update([
            'nik' => $request->nik,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi_dituju' => $request->lokasi_dituju,
            'suhu' => $request->suhu,
        ]);
        return redirect('history')->with('Success', 'Update data catatan berhasil!');
    }
    
    function store (Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:16',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:500',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'golongan_darah' => 'required|in:A,B,AB,O',
            'pendidikan' => 'required|in:SD,SMP,SMA,D1,D3,S1,S2,S3',
            'jenis_sim' => 'required|in:SIM A,SIM B1,SIM B2,SIM C,SIM D',
            'tanggal_pengajuan' => 'required|date',
        ], [
            // Custom messages jika diperlukan
            'name.required' => 'Nama Lengkap wajib diisi!',
            'nomor_ktp.required' => 'Nomor KTP wajib diisi!',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi!',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi!',
            'alamat.required' => 'Alamat Lengkap wajib diisi!',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi!',
            'golongan_darah.required' => 'Golongan Darah wajib diisi!',
            'pendidikan.required' => 'Pendidikan Terakhir wajib diisi!',
            'jenis_sim.required' => 'Jenis SIM wajib diisi!',
            'tanggal_pengajuan.required' => 'Tanggal Pengajuan wajib diisi!',
        ]);

        // Simpan data ke dalam database
        catatan::create($request->all());

        // Redirect ke halaman success atau halaman lain dengan pesan sukses
        return redirect()->route('history')->with('Success', 'Pengajuan SIM berhasil diajukan!');
    }
    public function history() {
        // Ambil semua data dari model Catatan
        $catatan = catatan::all();
        
        // Kirim data ke view
        return view('history.index', ['catatan' => $catatan]);
    }

}
