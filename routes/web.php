<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Public Routes - Pagination harus menggunakan route home
Route::get('/', [PosyanduController::class, 'index'])->name('home');

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User Routes (Read Only)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::post('/profile', [UserController::class, 'updateProfile'])->name('users.profile.update');
});

// Protected Routes - Hanya untuk user yang login
Route::middleware('auth')->group(function () {
    // Posyandu CRUD (SEMPURNA)
    Route::get('/posyandu', [PosyanduController::class, 'index'])->name('posyandu.index'); // <- TAMBAH INI
    Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('posyandu.create');
    Route::post('/posyandu', [PosyanduController::class, 'store'])->name('posyandu.store');
    Route::get('/posyandu/{posyandu}/edit', [PosyanduController::class, 'edit'])->name('posyandu.edit');
    Route::put('/posyandu/{posyandu}', [PosyanduController::class, 'update'])->name('posyandu.update');
    Route::delete('/posyandu/{posyandu}', [PosyanduController::class, 'destroy'])->name('posyandu.destroy');
    
    // Warga CRUD
    Route::resource('warga', WargaController::class);
});