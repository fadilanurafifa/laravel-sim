<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerifikasiEktpController;
use App\Models\Activity;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Cookie\SessionCookieJar;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route:: get('/',[HomeController::class, 'index']);
Route:: get('create-sim',[HomeController::class, 'create_page']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route:: resource('penduduk', PendudukController::class);

Route::post('/catatan', [SessionController::class, 'store'])->name('catatan.store');
Route::get('/history', [SessionController::class, 'history'])->name('history');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::post('editcatatan/{id}',[SessionController::class , 'update']);
Route::delete('history/{id}', [HistoryController::class, 'destroy'])->name('history.destroy');

Route::get('/verifikasi-ektp', [SessionController::class, 'showForm'])->name('verifikasi.ektp');
Route::post('/verifikasi-ektp', [SessionController::class, 'processForm'])->name('verifikasi.ektp.submit');

Route::post('/verifikasi-ektp', [VerifikasiEktpController::class, 'store'])->name('verifikasi.ektp.submit');
Route::get('/verifikasi-sukses', function () {
    return view('verifikasi-sukses'); // Nama view harus sesuai dengan file yang telah dibuat
})->name('verifikasi.sukses');

Route::get('/activities', [SessionController::class, 'index']);
Route::get('/activities', function () {
    $activities = Activity::with('user')->orderBy('activity_time', 'desc')->get();
    return response()->json($activities);
});

Route::get('/activity-details', [ActivityController::class, 'activityDetails'])->name('user.activityDetails');
Route::get('/activity-details', [ActivityController::class, 'activityDetails'])
    ->name('user.activityDetails')
    ->middleware('auth'); // Pastikan pengguna sudah login



