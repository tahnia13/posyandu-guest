<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        // Jika sudah login, redirect ke home
        if (session('logged_in')) {
            return redirect()->route('home')->with('info', 'Anda sudah login.');
        }
        
        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Data user dummy untuk demo
        $users = [
            [
                'email' => 'admin@posyandu.id',
                'password' => 'password123',
                'name' => 'Administrator',
                'role' => 'admin'
            ],
            [
                'email' => 'kader@posyandu.id',
                'password' => 'kader123',
                'name' => 'Kader Posyandu',
                'role' => 'kader'
            ],
            [
                'email' => 'user@posyandu.id',
                'password' => 'user123',
                'name' => 'User Demo',
                'role' => 'user'
            ]
        ];

        // Cek kredensial
        foreach ($users as $user) {
            if ($user['email'] === $request->email && $user['password'] === $request->password) {
                // Simpan session
                session([
                    'user' => $user,
                    'logged_in' => true
                ]);

                // Redirect ke HOME setelah login berhasil
                return redirect()->route('home')->with('success', 'Login berhasil! Selamat datang ' . $user['name']);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    /**
     * Show register form
     */
    public function showRegister()
    {
        // Jika sudah login, redirect ke home
        if (session('logged_in')) {
            return redirect()->route('home')->with('info', 'Anda sudah login.');
        }
        
        return view('auth.register');
    }

    /**
     * Handle register request
     */
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        // Simpan data user (dalam session untuk demo)
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 'user'
        ];

        session([
            'user' => $user,
            'logged_in' => true
        ]);

        // Redirect ke HOME setelah registrasi berhasil
        return redirect()->route('home')->with('success', 'Registrasi berhasil! Selamat datang ' . $user['name']);
    }

    /**
     * Handle logout
     */
    public function logout()
    {
        session()->flush();
        return redirect()->route('home')->with('info', 'Anda telah logout.');
    }
}