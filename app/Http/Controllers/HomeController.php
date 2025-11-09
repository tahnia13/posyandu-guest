<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page
     */
    public function index()
    {
        //return view('pages.index');
        
    }

    /**
     * Display about page
     */
    public function tentang()
    {
        $stats = [
            'tahun_berdiri' => 2018,
            'total_posyandu' => 28,
            'total_kader' => 156,
            'kecamatan_terjangkau' => 15
        ];

        return view('home.tentang', compact('stats'));
    }

    /**
     * Display contact page
     */
    public function kontak()
    {
        $kontak = [
            'telepon' => '(022) 1234-5678',
            'email' => 'info@posyandusehat.id',
            'alamat' => 'Jl. Merdeka No. 123, Bandung, Jawa Barat',
            'jam_operasional' => 'Senin - Jumat: 08:00 - 16:00 WIB'
        ];

        return view('home.kontak', compact('kontak'));
    }

    /**
     * Handle search
     */
    public function cari(Request $request)
    {
        $keyword = $request->get('q', '');

        // Simulasi hasil pencarian
        $hasil_layanan = [];
        $hasil_artikel = [];
        $hasil_posyandu = [];

        if (!empty($keyword)) {
            $hasil_layanan = [
                (object)[
                    'nama' => 'Pemeriksaan Bayi',
                    'slug' => 'pemeriksaan-bayi',
                    'deskripsi' => 'Pemeriksaan kesehatan dan tumbuh kembang bayi secara berkala'
                ]
            ];

            $hasil_artikel = [
                (object)[
                    'judul' => 'Tips Menjaga Kesehatan Bayi di Musim Hujan',
                    'slug' => 'tips-menjaga-kesehatan-bayi-musim-hujan',
                    'deskripsi' => 'Pelajari cara menjaga kesehatan bayi Anda selama musim hujan'
                ]
            ];

            $hasil_posyandu = [
                (object)[
                    'nama' => 'Posyandu Mawar',
                    'alamat' => 'Jl. Melati No. 10, Bandung',
                    'kecamatan' => 'Sukajadi'
                ]
            ];
        }

        return view('home.cari', compact('keyword', 'hasil_layanan', 'hasil_artikel', 'hasil_posyandu'));
    }
}