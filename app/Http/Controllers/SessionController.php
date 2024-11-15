<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\UpdatecatatanRequest;
use App\Models\catatan;
use App\Models\SimData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    public function login(Request $request)
{
    // Menyimpan email sementara dalam session
    Session::flash('email', $request->email);

    // Validasi input
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ], [
        'email.required' => 'Email Wajib Diisi!',
        'password.required' => 'Password Wajib Diisi!'
    ]);

    // Mempersiapkan informasi login
    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    // Proses login
    if (Auth::attempt($infologin)) {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        
        // Simpan nama pengguna di sesi
        session(['user_name' => $user->name]); // Simpan nama pengguna ke sesi

        // Simpan aktivitas login
        Activity::create([
            'user_id' => Auth::id(),
            'activity_name' => 'Login',
            'activity_time' => now(),
            'activity_details' => 'Pengguna berhasil login.'
        ]);        

        // Menambahkan log
        Log::info('Aktivitas dicatat', [
            'user_id' => $user->id,
            'username' => $user->name, // Nama pengguna
            'activity_name' => 'Login',
            'activity_details' => 'Pengguna ' . $user->name . ' login ke aplikasi'
        ]);

        // Redirect ke dashboard dengan pesan sukses
        return redirect('dashboard')->with('Success', $user->name . ' Berhasil Login!');
    } else {
        // Jika login gagal, redirect kembali ke halaman login dengan pesan error
        return redirect('sesi')->withErrors(['message' => 'Username dan password yang dimasukkan tidak valid']);
    }
} 
    public function logout(Request $request)
{
    $user = Auth::user(); // Pastikan mendapatkan user yang sedang login
    if ($user) {
        Activity::create([
            'user_id' => Auth::id(),
            'activity_name' => 'Logout',
            'activity_time' => now(),
        ]); 
    }

    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/sesi');
}

public function register()
{
    return view('sesi/register');
}

public function create(Request $request)
{
    Session::flash('name', $request->name);
    Session::flash('email', $request->email);
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ], [
        'name.required' => 'Nama Wajib Diisi!',
        'email.required' => 'Email Wajib Diisi!',
        'email.email' => 'Silahkan Masukan Email Yang Valid!',
        'email.unique' => 'Email Sudah Pernah Digunakan!',
        'password.required' => 'Password Wajib Diisi!',
        'password.min' => 'Minimum Password Yang Diizinkan Adalah 6 Karakter!'
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];
    User::create($data);

    // Simpan nama pengguna ke sesi setelah registrasi
    session(['user_name' => $request->name]); // Simpan nama pengguna ke sesi

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($infologin)) {
        return redirect('verifikasi-ektp')->with('Success', Auth::user()->name . ' Berhasil Register!');
    } else {
        return redirect('sesi')->withErrors(['message' => 'Username dan password yang dimasukkan tidak valid']);
    }
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:20',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:10',
            'golongan_darah' => 'required|string|max:3',
            'pendidikan' => 'required|string|max:255',
            'jenis_sim' => 'required|string|max:10',
            'tanggal_pengajuan' => 'required|date',
        ]);

        $update = catatan::where('id', $id)->update($request->only([
            'name',
            'nomor_ktp',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'golongan_darah',
            'pendidikan',
            'jenis_sim',
            'tanggal_pengajuan'
        ]));

        return redirect('history')->with('Success', 'Data Telah Diupdate');
    }

    public function store(Request $request)
    {
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
    
        // Simpan data formulir
        catatan::create($request->all());
    
        return redirect()->route('history')->with('Success', 'Pengajuan SIM berhasil diajukan!');
        Activity::create([
            'user_id' => Auth::id(),
            'activity_name' => 'Pengajuan SIM',
            'activity_time' => now(),
        ]);
        
    }    
    public function history()
    {
        $catatan = catatan::all();

        return view('history.index', ['catatan' => $catatan]);
    }

    public function showForm()
    {
        return view('verifikasi.ektp'); // Nama view untuk form verifikasi e-KTP
    }

    public function processForm(Request $request)
{
    // Validasi input pengguna
    $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|digits:16',
        'file_ektp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Proses upload file e-KTP jika diperlukan
    if ($request->hasFile('file_ektp')) {
        $filePath = $request->file('file_ektp')->store('uploads/ektp', 'public');
    }

    // Simpan data ke database jika diperlukan
    // Contoh: VerifikasiEktp::create([...]);

    // Redirect ke halaman dashboard dengan pesan sukses
    return redirect()->route('dashboard')->with('success', 'Verifikasi e-KTP berhasil dikirim!');
}
public function verifikasiAkun(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Cek kredensial
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Jika berhasil, arahkan ke halaman ujian
        return response()->json([
            'success' => true,
            'redirect' => route('halaman.ujian'), // Ganti dengan route yang sesuai
        ]);
    } else {
        // Jika gagal
        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah.',
        ]);
    }
}
}
