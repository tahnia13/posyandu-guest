<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PosyanduController;
use Illuminate\Support\Facades\Route;

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/cari', [HomeController::class, 'cari'])->name('cari');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Layanan Routes
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index.alternative');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.show');

// Artikel Routes
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.detail');

// Posyandu Routes
Route::get('/posyandu', [PosyanduController::class, 'index'])->name('posyandu');

// Hapus routes admin yang menggunakan middleware untuk sementara
// Route::middleware(['auth.custom'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });