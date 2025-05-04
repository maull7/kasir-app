<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// 🛡️ Proteksi route '/' pakai middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    // Tambahkan route lainnya di sini...
});

// 🛠️ Route login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
