<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosyanduController extends Controller
{

   public function index()
{
    $data = [
        [
            'id' => 1,
            'nama' => 'Posyandu Melati',
            'alamat' => 'Jl. Mawar No.1',
            'rt' => '01',
            'rw' => '02',
            'kontak' => '08123456789',
            'foto' => 'melati.jpg',
            'alat_media' => 'Timbangan bayi, Alat ukur tinggi badan, Buku KIA'
        ],
        [
            'id' => 2,
            'nama' => 'Posyandu Anggrek',
            'alamat' => 'Jl. Kenanga No.2',
            'rt' => '03',
            'rw' => '04',
            'kontak' => '08129876543',
            'foto' => 'anggrek.jpg',
            'alat_media' => 'Tensi meter, Stetoskop, Poster gizi'
        ],
    ];
    return view('posyandu.index', compact('data'));
}

    public function create()
    {
        return view('posyandu.create');
    }

    public function edit($id)
    {
        $posyandu = ['id' => $id, 'nama' => 'Posyandu Dummy', 'alamat' => 'Jl. Contoh', 'rt' => '05', 'rw' => '06', 'kontak' => '0812000111'];
        return view('posyandu.edit', compact('posyandu'));
    }
}