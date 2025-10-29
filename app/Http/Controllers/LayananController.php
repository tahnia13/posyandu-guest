<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Daftar Semua Layanan
    public function index()
    {
        // Data dummy kategori dan layanan
        $kategori = [
            (object)[
                'id' => 1,
                'nama' => 'Layanan Kesehatan Anak',
                'layanan' => [
                    (object)[
                        'id' => 1,
                        'nama' => 'Pemeriksaan Bayi',
                        'slug' => 'pemeriksaan-bayi',
                        'deskripsi_singkat' => 'Pemeriksaan kesehatan dan tumbuh kembang bayi',
                        'icon' => 'fas fa-baby',
                        'status' => 'active'
                    ],
                    (object)[
                        'id' => 3,
                        'nama' => 'Imunisasi',
                        'slug' => 'imunisasi',
                        'deskripsi_singkat' => 'Pelayanan imunisasi lengkap untuk bayi dan balita',
                        'icon' => 'fas fa-syringe',
                        'status' => 'active'
                    ]
                ]
            ],
            (object)[
                'id' => 2,
                'nama' => 'Layanan Kesehatan Ibu',
                'layanan' => [
                    (object)[
                        'id' => 2,
                        'nama' => 'Kesehatan Ibu',
                        'slug' => 'kesehatan-ibu',
                        'deskripsi_singkat' => 'Pemeriksaan dan konsultasi kesehatan ibu',
                        'icon' => 'fas fa-female',
                        'status' => 'active'
                    ],
                    (object)[
                        'id' => 6,
                        'nama' => 'Kelas Ibu Hamil',
                        'slug' => 'kelas-ibu-hamil',
                        'deskripsi_singkat' => 'Edukasi dan pendampingan untuk ibu hamil',
                        'icon' => 'fas fa-book-medical',
                        'status' => 'active'
                    ]
                ]
            ]
        ];
        
        $layanan_populer = [
            (object)[
                'id' => 1,
                'nama' => 'Pemeriksaan Bayi',
                'slug' => 'pemeriksaan-bayi',
                'deskripsi_singkat' => 'Pemeriksaan kesehatan dan tumbuh kembang bayi secara berkala',
                'icon' => 'fas fa-baby',
                'is_popular' => true
            ],
            (object)[
                'id' => 3,
                'nama' => 'Imunisasi',
                'slug' => 'imunisasi',
                'deskripsi_singkat' => 'Pelayanan imunisasi lengkap untuk bayi dan balita',
                'icon' => 'fas fa-syringe',
                'is_popular' => true
            ]
        ];
            
        return view('layanan');
    }
    
    // Detail Layanan
    public function show($slug)
    {
        // Data dummy detail layanan
        $layanan = (object)[
            'id' => 1,
            'nama' => 'Pemeriksaan Bayi',
            'slug' => $slug,
            'deskripsi_lengkap' => 'Layanan pemeriksaan kesehatan bayi secara rutin untuk memantau tumbuh kembang dan mendeteksi dini masalah kesehatan.',
            'manfaat' => [
                'Pemantauan pertumbuhan dan perkembangan bayi',
                'Deteksi dini masalah kesehatan',
                'Konsultasi dengan tenaga kesehatan profesional',
                'Pencatatan riwayat kesehatan yang terstruktur'
            ],
            'sasaran' => 'Bayi usia 0-12 bulan',
            'frekuensi' => 'Bulanan',
            'icon' => 'fas fa-baby',
            'kategori_id' => 1
        ];
            
        $layanan_terkait = [
            (object)[
                'id' => 3,
                'nama' => 'Imunisasi',
                'slug' => 'imunisasi',
                'deskripsi_singkat' => 'Pelayanan imunisasi lengkap untuk bayi dan balita',
                'icon' => 'fas fa-syringe'
            ],
            (object)[
                'id' => 4,
                'nama' => 'Pemantauan Gizi',
                'slug' => 'pemantauan-gizi',
                'deskripsi_singkat' => 'Pemantauan status gizi dan pemberian makanan tambahan',
                'icon' => 'fas fa-utensils'
            ]
        ];
            
        return view('guest.layanan-detail', compact('layanan', 'layanan_terkait'));
    }
}