<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PosyanduController;

Route::get('/', [AuthController::class, 'index'])->name('auth.index');
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');

// Login pakai AJAX (POST)
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/berhasil', function () {
    return view('auth.berhasil');
});

// Halaman Posyandu
Route::get('/posyandu', [PosyanduController::class, 'index'])->name('posyandu.index');
Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('posyandu.create');
Route::get('/posyandu/{id}/edit', [PosyanduController::class, 'edit'])->name('posyandu.edit');
