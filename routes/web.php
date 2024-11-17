<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DataEktpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\VerifikasiEktpController;
use App\Models\Activity;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimController;
use App\Http\Controllers\UjianController;

// Route:: get('/',[HomeController::class, 'index']);
Route::get('/', function () {
    return redirect('/sesi');
});
Route::get('create-sim', [HomeController::class, 'create_page']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('penduduk', PendudukController::class);

Route::post('/catatan', [SessionController::class, 'store'])->name('catatan.store');
Route::get('/history', [SessionController::class, 'history'])->name('history');
Route::get('/history/user', [SessionController::class, 'historyuser'])->name('historyuser');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::post('editcatatan/{id}', [SessionController::class, 'update']);
Route::delete('history/{id}', [HistoryController::class, 'destroy'])->name('history.destroy');

Route::get('/verifikasi-ektp', [SessionController::class, 'showForm'])->name('verifikasi.ektp');
Route::post('/verifikasi-ektp', [SessionController::class, 'processForm'])->name('verifikasi.ektp.submit');

Route::post('/verifikasi-ektp', [VerifikasiEktpController::class, 'store'])->name('verifikasi.ektp.submit');
Route::get('/verifikasi-ektp/hasil', [VerifikasiEktpController::class, 'showHasil'])->name('verifikasi_ektp.hasil');

Route::get('/verifikasi-sukses', function () {
    return view('verifikasi-sukses');
})->name('verifikasi-sukses');

Route::get('/activities', [SessionController::class, 'index']);
Route::get('/activities', function () {
    $activities = Activity::with('user')->orderBy('activity_time', 'desc')->get();
    return response()->json($activities);
});

Route::get('/activity-details', [ActivityController::class, 'activityDetails'])->name('user.activityDetails');
Route::get('/activity-details', [ActivityController::class, 'activityDetails'])
    ->name('user.activityDetails')
    ->middleware('auth');

Route::get('/registered-users', [UserController::class, 'index'])->name('registered-users');

// data ektp 
Route::get('/data-ektp', [DataEktpController::class, 'index'])->name('data_ektp.index');
Route::get('/data-verifikasi', [VerifikasiEktpController::class, 'showDataVerifikasi'])->name('data.verifikasi');

// menampilkan file ektp
Route::get('/show-ektp', [VerifikasiEktpController::class, 'showAllEktp'])->name('show_ektp');

// profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

// chart
Route::get('/get-sim-data', [SimController::class, 'getSimData']);

// verif akses ujian
Route::get('/akses-ujian', function () {
    return view('akses-ujian'); // Pastikan ini mengarah ke file akses-ujian.blade.php
})->name('ujian.akses');

Route::post('/verifikasi-akun', [SessionController::class, 'verifikasiAkun'])->name('verifikasi.akun');

Route::get('/halaman-ujian', [UjianController::class, 'index'])->name('halaman.ujian');

Route::post('/ambil-antrian', [QueueController::class, 'ambilAntrian'])->name('ambilAntrian');

Route::get('/pembayaran', [PembayaranController::class, 'showForm'])->name('pembayaran.form');

// Rute untuk memproses pembayaran
Route::post('/pembayaran', [PembayaranController::class, 'processPayment'])->name('process-payment');

Route::get('payment/success', function () {
    return view('payment.success');
})->name('payment.success');
Route::get('/payment/error', function () {
    return view('payment.error');
})->name('payment.error');
Route::get('/transaction/{id}', [PaymentController::class, 'showTransaction'])->name('transaction.show');

// Route untuk menampilkan bukti pembayaran
Route::get('/payment-proof', [PaymentController::class, 'showPaymentProof'])->name('payment-proof');

// Route untuk menyimpan data pembayaran
Route::post('/store-payment', [PaymentController::class, 'storePayment'])->name('store-payment');

Route::post('/submit-payment', [PaymentController::class, 'submitPayment'])->name('submit-payment');
