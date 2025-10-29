<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data dummy untuk demo
        $dataPosyandu = [
            [
                'id' => 1,
                'nama_balita' => 'Ahmad Susanto',
                'usia' => '2 tahun 3 bulan',
                'nama_ibu' => 'Siti Rahayu',
                'alamat' => 'Jl. Merdeka No. 123',
                'tanggal_periksa' => '2024-01-15'
            ],
            [
                'id' => 2,
                'nama_balita' => 'Budi Santoso',
                'usia' => '1 tahun 8 bulan',
                'nama_ibu' => 'Maya Sari',
                'alamat' => 'Jl. Sudirman No. 45',
                'tanggal_periksa' => '2024-01-16'
            ]
        ];

        return view('posyandu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posyandu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_balita' => 'required|string|max:255',
            'usia' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tanggal_periksa' => 'required|date'
        ]);

        // Dalam real application, simpan ke database
        // Untuk demo, redirect dengan success message
        return redirect()->route('posyandu.index')
                        ->with('success', 'Data balita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
     {
        // PERUBAHAN DI SINI: Tambahkan with('anggota')
        $posyandu = Posyandu::with('anggota')->findOrFail($id);
        
        return view('guest.posyandu-show', compact('posyandu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Data dummy untuk demo
        $balita = [
            'id' => $id,
            'nama_balita' => 'Ahmad Susanto',
            'usia' => '2 tahun 3 bulan',
            'nama_ibu' => 'Siti Rahayu',
            'alamat' => 'Jl. Merdeka No. 123',
            'tanggal_periksa' => '2024-01-15'
        ];

        return view('posyandu.edit', compact('balita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'nama_balita' => 'required|string|max:255',
            'usia' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'tanggal_periksa' => 'required|date'
        ]);

        // Dalam real application, update ke database
        return redirect()->route('posyandu.index')
                        ->with('success', 'Data balita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Dalam real application, hapus dari database
        return redirect()->route('posyandu.index')
                        ->with('success', 'Data balita berhasil dihapus!');
    }
}