<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// 🛡️ Proteksi route '/' pakai middleware auth
Route::get('/', function () {
    return view('index');
})->middleware('auth');

// 🛠️ Route login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
