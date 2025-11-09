<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Warga;
use App\Models\User;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{

    public function index()
    {
        $posyandus = Posyandu::all();
        $wargas = Warga::with('posyandu')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        $users = User::orderBy('created_at', 'desc')->get();

        return view('pages.index', compact('posyandus', 'wargas', 'users'));
    }

    public function create()
    {
        return view('pages.posyandu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'jadwal' => 'nullable|string|max:100',
        ]);

        Posyandu::create($request->all());
        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil ditambahkan.');
    }

    public function edit(Posyandu $posyandu)
    {
        return view('pages.posyandu.edit', compact('posyandu'));
    }

    public function update(Request $request, Posyandu $posyandu)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'jadwal' => 'nullable|string|max:100',
        ]);

        $posyandu->update($request->all());
        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil diperbarui.');
    }

    public function destroy(Posyandu $posyandu)
    {
        $posyandu->delete();
        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil dihapus.');
    }
}