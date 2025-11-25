<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\Warga;
use App\Models\User;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
     public function index(Request $request)
    {
        // Query untuk posyandu dengan search
        $posyanduQuery = Posyandu::orderBy('created_at', 'desc');
        
        // Search posyandu
        if ($request->has('search_posyandu') && $request->search_posyandu != '') {
            $search = $request->search_posyandu;
            $posyanduQuery->where(function($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('alamat', 'like', '%' . $search . '%')
                      ->orWhere('jadwal', 'like', '%' . $search . '%');
            });
        }

        $posyandus = $posyanduQuery->paginate(6, ['*'], 'posyandu_page')->withPath('/');
        
        // Query untuk warga dengan search dan filter
        $wargaQuery = Warga::with('posyandu')->orderBy('created_at', 'desc');
        
        // Search warga
        if ($request->has('search_warga') && $request->search_warga != '') {
            $search = $request->search_warga;
            $wargaQuery->where(function($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('nik', 'like', '%' . $search . '%')
                      ->orWhere('alamat', 'like', '%' . $search . '%')
                      ->orWhere('jenis_kelamin', 'like', '%' . $search . '%');
            });
        }
        
        // Filter berdasarkan jenis kelamin
        if ($request->has('jenis_kelamin') && $request->jenis_kelamin != '') {
            $wargaQuery->where('jenis_kelamin', $request->jenis_kelamin);
        }

        $wargas = $wargaQuery->paginate(6, ['*'], 'warga_page')->withPath('/');
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