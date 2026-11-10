<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'loginPage'])->name('login');

// Proses Login
Route::post('/login', [PageController::class, 'login'])->name('login.process');

// Halaman Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Halaman Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Halaman Pengelolaan Buku
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');