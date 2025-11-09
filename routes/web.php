<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Public Routes
Route::get('/', [PosyanduController::class, 'index'])->name('posyandu.index');

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
    Route::resource('posyandu', PosyanduController::class)->except(['index']);
    Route::resource('warga', WargaController::class);
});