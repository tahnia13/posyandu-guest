<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;

// Route Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'detail'])->name('layanan.detail');

// Route Posyandu
Route::get('/posyandu', [PosyanduController::class, 'index'])->name('posyandu.index');
Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('posyandu.create');
Route::post('/posyandu', [PosyanduController::class, 'store'])->name('posyandu.store');
Route::get('/posyandu/{id}', [PosyanduController::class, 'show'])->name('posyandu.show');
Route::get('/posyandu/{id}/edit', [PosyanduController::class, 'edit'])->name('posyandu.edit');
Route::put('/posyandu/{id}', [PosyanduController::class, 'update'])->name('posyandu.update');
Route::delete('/posyandu/{id}', [PosyanduController::class, 'destroy'])->name('posyandu.destroy');



// Route Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArtikelController::class, 'detail'])->name('artikel.detail');

// Route Guest
Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [GuestController::class, 'kirimPesan'])->name('kontak.kirim');
Route::get('/faq', [GuestController::class, 'faq'])->name('faq');
Route::get('/bantuan', [GuestController::class, 'bantuan'])->name('bantuan');

// Route Pencarian
Route::get('/cari', [HomeController::class, 'cari'])->name('cari');
