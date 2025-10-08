<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login-form');
    }

    public function login(Request $request)
    {
 

        $request->validate([
            'username' => 'required',
            'password' => 'required|min:3|regex:/[A-Z]/'
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 3 karakter.',
            'password.regex' => 'Password harus mengandung huruf kapital.'
        ]);

        
        if ($request->username === 'Admin' && $request->password === 'TesAja123') {
            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil! Selamat datang, Admin.'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Username atau password salah.'
        ]);
    }
}
