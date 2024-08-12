<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Route:: get('/',[HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route:: resource('penduduk', PendudukController::class);

Route::get('/catatan', [SessionController::class, 'store'])->name('catatan.store');
Route::get('/history', [SessionController::class, 'history'])->name('history');

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
Route::post('editcatatan/{id}',[SessionController::class , 'update']);
Route::delete('history/{id}', [HistoryController::class, 'destroy'])->name('history.destroy');

