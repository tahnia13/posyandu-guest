<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posyandu;
use Illuminate\Support\Facades\Storage;

class PosyanduController extends Controller
{
    public function index()
    {
        $posyandus = Posyandu::where('status', 'active')->orderBy('created_at', 'desc')->get();
        return view('posyandu.index', compact('posyandus'));
    }

    public function create()
    {
        return view('posyandu.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_posyandu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'telepon' => 'nullable|string|max:15',
            'email' => 'nullable|email',
            'penanggung_jawab' => 'required|string|max:255',
            'jam_operasional_buka' => 'required|date_format:H:i',
            'jam_operasional_tutup' => 'required|date_format:H:i',
            'fasilitas' => 'nullable|string',
            'layanan' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('posyandu', 'public');
        }

        Posyandu::create($validated);

        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil ditambahkan!');
    }

    public function show($id)
    {
        $posyandu = Posyandu::findOrFail($id);
        return view('posyandu.show', compact('posyandu'));
    }

    public function edit($id)
    {
        $posyandu = Posyandu::findOrFail($id);
        return view('posyandu.edit', compact('posyandu'));
    }

    public function update(Request $request, $id)
    {
        $posyandu = Posyandu::findOrFail($id);

        $validated = $request->validate([
            'nama_posyandu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'telepon' => 'nullable|string|max:15',
            'email' => 'nullable|email',
            'penanggung_jawab' => 'required|string|max:255',
            'jam_operasional_buka' => 'required|date_format:H:i',
            'jam_operasional_tutup' => 'required|date_format:H:i',
            'fasilitas' => 'nullable|string',
            'layanan' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('gambar')) {
            if ($posyandu->gambar) {
                Storage::disk('public')->delete($posyandu->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('posyandu', 'public');
        }

        $posyandu->update($validated);

        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $posyandu = Posyandu::findOrFail($id);

        if ($posyandu->gambar) {
            Storage::disk('public')->delete($posyandu->gambar);
        }

        $posyandu->delete();

        return redirect()->route('posyandu.index')->with('success', 'Posyandu berhasil dihapus!');
    }
}
