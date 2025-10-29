<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        // Data dummy untuk demo
        $layanan = [
            (object)[
                'id' => 1,
                'nama' => 'Pemeriksaan Bayi',
                'slug' => 'pemeriksaan-bayi',
                'deskripsi_singkat' => 'Pemeriksaan kesehatan dan tumbuh kembang bayi secara berkala',
                'icon' => 'fas fa-baby'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Kesehatan Ibu',
                'slug' => 'kesehatan-ibu', 
                'deskripsi_singkat' => 'Pemeriksaan dan konsultasi kesehatan ibu hamil dan menyusui',
                'icon' => 'fas fa-female'
            ]
        ];
        
        $artikel = [
            (object)[
                'id' => 1,
                'judul' => 'Tips Menjaga Kesehatan Bayi',
                'slug' => 'tips-menjaga-kesehatan-bayi',
                'deskripsi' => 'Pelajari cara menjaga kesehatan bayi Anda',
                'created_at' => now()
            ]
        ];
            
        $stats = [
            'total_posyandu' => 25,
            'total_anak' => 1250,
            'total_ibu' => 890,
            'total_layanan' => 8
        ];
        
        return view('guest.home', compact('layanan', 'artikel', 'stats'));
    }
    
    /**
     * Display the posyandu page
     */
    public function posyandu()
    {
        return view('guest.posyandu');
    }
    
    /**
     * Display the artikel page
     */
    public function artikel()
    {
        return view('guest.artikel');
    }
    
    /**
     * Display artikel detail
     */
    public function artikelDetail($slug)
    {
        return view('guest.artikel-detail', compact('slug'));
    }
    
    /**
     * Display the tentang page
     */
    public function tentang()
    {
        return view('guest.tentang');
    }
    
    /**
     * Display the kontak page
     */
    public function kontak()
    {
        return view('guest.kontak');
    }
    
    /**
     * Handle search
     */
    public function cari(Request $request)
    {
        $keyword = $request->get('q');
        return view('guest.cari', compact('keyword'));
    }
}