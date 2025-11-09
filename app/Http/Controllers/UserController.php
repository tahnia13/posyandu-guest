<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('pages.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.users.show', compact('user'));
    }

    /**
     * Show user profile
     */
    public function profile()
    {
        $user = auth()->user();
        return view('pages.users.profile', compact('user'));
    }

    /**
     * Update user profile
     */
    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:6|confirmed',
            ]);
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.profile')->with('success', 'Profil berhasil diperbarui.');
    }
}