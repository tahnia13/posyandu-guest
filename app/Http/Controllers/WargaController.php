<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = Warga::with('posyandu')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
            
        $posyandus = Posyandu::all();
        
        return view('pages.warga.index', compact('wargas', 'posyandus'));
    }

    public function create()
    {
        $posyandus = Posyandu::all();
        return view('pages.warga.create', compact('posyandus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|unique:wargas,nik|max:16',
            'usia' => 'required|integer|min:0|max:120',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'posyandu_id' => 'required|exists:posyandus,id',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        Warga::create($request->all());

        return redirect()->route('posyandu.index')->with('success', 'Data warga berhasil ditambahkan.');
    }

    public function show(Warga $warga)
    {
        return view('pages.warga.show', compact('warga'));
    }

    public function edit(Warga $warga)
    {
        $posyandus = Posyandu::all();
        return view('pages.warga.edit', compact('warga', 'posyandus'));
    }

    public function update(Request $request, Warga $warga)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16|unique:wargas,nik,' . $warga->id,
            'usia' => 'required|integer|min:0|max:120',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'posyandu_id' => 'nullable|exists:posyandus,id',
            'status' => 'required|in:aktif,tidak_aktif'
        ]);

        $warga->update($request->all());

        return redirect()->route('posyandu.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy(Warga $warga)
    {
        $warga->delete();

        return redirect()->route('posyandu.index')->with('success', 'Data warga berhasil dihapus.');
    }

    // Tambahkan constructor di kedua controller
    public function __construct()
    {
    //$this->middleware('auth');
    }
}
