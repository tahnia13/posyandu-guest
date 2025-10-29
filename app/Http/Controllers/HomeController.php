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
        // Data layanan
        $layanan = [
            (object)[
                'id' => 1,
                'nama' => 'Pemeriksaan Bayi',
                'slug' => 'pemeriksaan-bayi',
                'deskripsi_singkat' => 'Pemeriksaan kesehatan dan tumbuh kembang bayi secara berkala',
                'icon' => 'fas fa-baby',
                'warna' => '#2c7fb8'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Kesehatan Ibu',
                'slug' => 'kesehatan-ibu',
                'deskripsi_singkat' => 'Pemeriksaan dan konsultasi kesehatan ibu hamil dan menyusui',
                'icon' => 'fas fa-female',
                'warna' => '#00a896'
            ],
            (object)[
                'id' => 3,
                'nama' => 'Imunisasi',
                'slug' => 'imunisasi',
                'deskripsi_singkat' => 'Pelayanan imunisasi lengkap untuk bayi dan balita',
                'icon' => 'fas fa-syringe',
                'warna' => '#ff6b6b'
            ],
            (object)[
                'id' => 4,
                'nama' => 'Pemantauan Gizi',
                'slug' => 'pemantauan-gizi',
                'deskripsi_singkat' => 'Pemantauan status gizi dan pemberian makanan tambahan',
                'icon' => 'fas fa-utensils',
                'warna' => '#ffa726'
            ],
            (object)[
                'id' => 5,
                'nama' => 'Konsultasi Gizi',
                'slug' => 'konsultasi-gizi',
                'deskripsi_singkat' => 'Konsultasi pola makan dan gizi seimbang untuk anak',
                'icon' => 'fas fa-apple-alt',
                'warna' => '#66bb6a'
            ],
            (object)[
                'id' => 6,
                'nama' => 'Kelas Ibu Hamil',
                'slug' => 'kelas-ibu-hamil',
                'deskripsi_singkat' => 'Edukasi dan pendampingan untuk ibu hamil',
                'icon' => 'fas fa-book-medical',
                'warna' => '#ab47bc'
            ]
        ];

        // Data artikel terbaru
        $artikel = [
            (object)[
                'id' => 1,
                'judul' => 'Tips Menjaga Kesehatan Bayi di Musim Hujan',
                'slug' => 'tips-menjaga-kesehatan-bayi-musim-hujan',
                'deskripsi' => 'Pelajari cara menjaga kesehatan bayi Anda selama musim hujan dengan tips praktis dan mudah diterapkan.',
                'gambar' => null,
                'tanggal' => '15 Des 2024',
                'penulis' => 'Dr. Sarah Melati'
            ],
            (object)[
                'id' => 2,
                'judul' => 'Pentingnya Imunisasi Dasar Lengkap untuk Anak',
                'slug' => 'pentingnya-imunisasi-dasar-lengkap',
                'deskripsi' => 'Imunisasi dasar lengkap sangat penting untuk melindungi anak dari berbagai penyakit berbahaya.',
                'gambar' => null,
                'tanggal' => '12 Des 2024',
                'penulis' => 'Dr. Ahmad Fauzi'
            ],
            (object)[
                'id' => 3,
                'judul' => 'Nutrisi yang Tepat untuk Ibu Menyusui',
                'slug' => 'nutrisi-tepat-ibu-menyusui',
                'deskripsi' => 'Dapatkan informasi tentang nutrisi yang dibutuhkan ibu menyusui untuk kesehatan diri dan bayi.',
                'gambar' => null,
                'tanggal' => '10 Des 2024',
                'penulis' => 'Ns. Maya Sari'
            ]
        ];

        // Data statistik
        $stats = [
            'total_posyandu' => 28,
            'total_anak' => 1347,
            'total_ibu' => 925,
            'total_layanan' => 12
        ];

        return view('home.index', compact('layanan', 'artikel', 'stats'));
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