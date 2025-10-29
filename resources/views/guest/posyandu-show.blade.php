<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Posyandu - Sistem Informasi Posyandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Header -->
    <nav class="hero-gradient text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                        <i class="fas fa-baby text-blue-600 text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold">POSYANDU SEHAT</h1>
                        <p class="text-blue-200 text-sm">Sistem Informasi Posyandu Terpadu</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('guest') }}" class="text-blue-100 hover:text-white transition-colors">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="{{ route('guest.posyandu.index') }}" class="text-blue-100 hover:text-white transition-colors">
                        <i class="fas fa-clinic-medical mr-2"></i>Data Posyandu
                    </a>
                    <a href="{{ route('auth.login') }}" class="bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition-colors font-semibold">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto py-8 px-4">
        <!-- Breadcrumb -->
        <div class="flex items-center space-x-2 text-sm text-gray-600 mb-6">
            <a href="{{ route('guest') }}" class="hover:text-blue-600">Beranda</a>
            <span>/</span>
            <a href="{{ route('guest.posyandu.index') }}" class="hover:text-blue-600">Data Posyandu</a>
            <span>/</span>
            <span class="text-gray-800 font-semibold">Detail Posyandu</span>
        </div>

        <!-- SOLUSI NOMOR 8: DEBUG SEMENTARA - Tambahkan ini untuk debugging -->
        @php
            // Debug: Cek apakah data posyandu ada dan lengkap
            echo "<!-- DEBUG INFO START -->";
            echo "<!-- Posyandu Data: " . json_encode(isset($posyandu) ? $posyandu : 'NULL') . " -->";
            echo "<!-- Anggota Count: " . (isset($posyandu->anggota) ? $posyandu->anggota->count() : 'NO_ANGGOTA') . " -->";
            echo "<!-- Posyandu ID: " . (isset($posyandu->id) ? $posyandu->id : 'NO_ID') . " -->";
            echo "<!-- DEBUG INFO END -->";
        @endphp

        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <!-- Header Section -->
            <div class="hero-gradient text-white p-8">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-2">{{ $posyandu->nama_posyandu ?? 'Nama Posyandu Tidak Tersedia' }}</h1>
                        <div class="flex items-center space-x-4">
                            <span class="bg-green-500 text-white text-sm font-semibold px-3 py-1 rounded-full">
                                <i class="fas fa-check-circle mr-1"></i>Status Aktif
                            </span>
                            <span class="text-blue-100">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                Update: {{ isset($posyandu->updated_at) ? \Carbon\Carbon::parse($posyandu->updated_at)->format('d F Y') : 'Tanggal tidak tersedia' }}
                            </span>
                        </div>
                    </div>
                    <div class="mt-4 lg:mt-0">
                        <a href="tel:{{ $posyandu->kontak ?? '' }}" 
                           class="bg-white text-blue-600 px-6 py-3 rounded-lg hover:bg-gray-100 transition-colors font-semibold inline-flex items-center">
                            <i class="fas fa-phone mr-2"></i>Hubungi Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 p-8">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Lokasi & Alamat -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-map-marker-alt text-blue-600 mr-3 text-2xl"></i>
                            Informasi Lokasi
                        </h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Alamat Lengkap</label>
                                <p class="text-gray-800 text-lg">{{ $posyandu->alamat ?? 'Alamat tidak tersedia' }}</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-600 mb-1">RT/RW</label>
                                    <p class="text-gray-800">RT {{ $posyandu->rt ?? '-' }} / RW {{ $posyandu->rw ?? '-' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-600 mb-1">Kelurahan</label>
                                    <p class="text-gray-800">{{ $posyandu->kelurahan ?? 'Belum diisi' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-600 mb-1">Kecamatan</label>
                                    <p class="text-gray-800">{{ $posyandu->kecamatan ?? 'Belum diisi' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kontak & Informasi -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-address-card text-green-600 mr-3 text-2xl"></i>
                            Informasi Kontak
                        </h2>
                        <div class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-600 mb-1">Nomor Telepon/HP</label>
                                    <p class="text-gray-800 text-lg">{{ $posyandu->kontak ?? 'Tidak ada' }}</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-600 mb-1">Media Sosial</label>
                                    <p class="text-gray-800">{{ $posyandu->media_sosial ?? 'Tidak ada' }}</p>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Jam Operasional</label>
                                <p class="text-gray-800">{{ $posyandu->jam_operasional ?? 'Senin - Jumat, 08:00 - 14:00' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Daftar Anggota Posyandu - BAGIAN YANG DIPERBAIKI DENGAN SOLUSI NOMOR 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-users text-purple-600 mr-3 text-2xl"></i>
                            Daftar Anggota Posyandu
                        </h2>
                        <div class="space-y-4">
                            
                            <!-- SOLUSI NOMOR 8: DEBUG SEMENTARA - Tambahkan pengecekan debug -->
                            @php
                                // Debug info untuk anggota
                                $anggotaList = $posyandu->anggota ?? collect([]);
                                $anggotaCount = $anggotaList->count();
                                
                                echo "<!-- DEBUG ANGGOTA: Count = $anggotaCount -->";
                                if ($anggotaCount > 0) {
                                    echo "<!-- DEBUG ANGGOTA: Data tersedia -->";
                                    foreach ($anggotaList as $index => $anggota) {
                                        echo "<!-- Anggota $index: " . ($anggota->nama ?? 'NO_NAME') . " -->";
                                    }
                                } else {
                                    echo "<!-- DEBUG ANGGOTA: Tidak ada data anggota -->";
                                }
                            @endphp

                            @if($anggotaCount > 0)
                                @foreach($anggotaList as $anggota)
                                    <div class="flex items-center justify-between p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition-colors">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-12 h-12 rounded-full flex items-center justify-center 
                                                        {{ ($anggota->jenis_kelamin ?? 'L') == 'L' ? 'bg-blue-100 text-blue-600' : 'bg-pink-100 text-pink-600' }}">
                                                <i class="fas {{ ($anggota->jenis_kelamin ?? 'L') == 'L' ? 'fa-mars' : 'fa-venus' }} text-lg"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-gray-800">{{ $anggota->nama ?? 'Nama tidak tersedia' }}</h4>
                                                <div class="flex items-center space-x-3 text-sm text-gray-600">
                                                    <span class="bg-gray-100 px-2 py-1 rounded">{{ $anggota->jabatan ?? 'Anggota' }}</span>
                                                    <span>•</span>
                                                    <span class="{{ ($anggota->jenis_kelamin ?? 'L') == 'L' ? 'text-blue-600' : 'text-pink-600' }}">
                                                        {{ ($anggota->jenis_kelamin ?? 'L') == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                                    </span>
                                                    @if(isset($anggota->telepon) && !empty($anggota->telepon))
                                                    <span>•</span>
                                                    <span class="text-green-600">
                                                        <i class="fas fa-phone mr-1"></i>{{ $anggota->telepon }}
                                                    </span>
                                                    @endif
                                                </div>
                                                @if(isset($anggota->alamat) && !empty($anggota->alamat))
                                                <p class="text-xs text-gray-500 mt-1">
                                                    <i class="fas fa-map-marker-alt mr-1"></i>{{ $anggota->alamat }}
                                                </p>
                                                @endif
                                                @if(isset($anggota->tanggal_lahir))
                                                <p class="text-xs text-gray-500 mt-1">
                                                    <i class="fas fa-birthday-cake mr-1"></i>
                                                    {{ \Carbon\Carbon::parse($anggota->tanggal_lahir)->format('d/m/Y') }}
                                                </p>
                                                @endif
                                            </div>
                                        </div>
                                        @if(isset($posyandu->id) && isset($anggota->id))
                                        <form action="{{ route('guest.posyandu.anggota.destroy', ['posyanduId' => $posyandu->id, 'anggotaId' => $anggota->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-900 text-sm flex items-center p-2 rounded hover:bg-red-50 transition-colors"
                                                    onclick="return confirm('Yakin ingin menghapus anggota {{ $anggota->nama ?? '' }}?')">
                                                <i class="fas fa-trash mr-1"></i>Hapus
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center py-8">
                                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <i class="fas fa-users text-gray-400 text-2xl"></i>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-600 mb-2">Belum Ada Anggota</h3>
                                    <p class="text-gray-500 mb-4">Belum ada data anggota untuk posyandu ini.</p>
                                    @if(isset($posyandu->id))
                                    <a href="{{ route('guest.posyandu.anggota.create', $posyandu->id) }}" 
                                       class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold inline-flex items-center">
                                        <i class="fas fa-user-plus mr-2"></i>Tambah Anggota Pertama
                                    </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Deskripsi & Layanan -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-info-circle text-purple-600 mr-3 text-2xl"></i>
                            Deskripsi & Layanan
                        </h2>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-2">Tentang Posyandu</label>
                                <p class="text-gray-700 leading-relaxed">
                                    {{ $posyandu->deskripsi ?? 'Posyandu ini memberikan pelayanan kesehatan ibu dan anak, termasuk pemeriksaan balita, imunisasi, dan konsultasi gizi untuk masyarakat sekitar.' }}
                                </p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-2">Layanan yang Tersedia</label>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Pemeriksaan Balita</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Imunisasi Rutin</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Konsultasi Gizi</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Penyuluhan Kesehatan</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Pemantauan Tumbuh Kembang</span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-check text-green-600 mr-2"></i>
                                        <span class="text-gray-700">Pemberian Vitamin A</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Quick Actions -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
                        <div class="space-y-3">
                            <a href="tel:{{ $posyandu->kontak ?? '' }}" 
                               class="w-full bg-green-600 text-white py-3 px-4 rounded-lg hover:bg-green-700 transition-colors font-semibold text-center flex items-center justify-center">
                                <i class="fas fa-phone mr-2"></i>Telepon
                            </a>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $posyandu->kontak ?? '') }}?text=Halo%20Posyandu%20{{ urlencode($posyandu->nama_posyandu ?? '') }},%20saya%20ingin%20bertanya%20tentang%20layanan%20posyandu." 
                               target="_blank"
                               class="w-full bg-green-500 text-white py-3 px-4 rounded-lg hover:bg-green-600 transition-colors font-semibold text-center flex items-center justify-center">
                                <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                            </a>
                            @if(isset($posyandu->id))
                            <a href="{{ route('guest.posyandu.anggota.create', $posyandu->id) }}" 
                               class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors font-semibold text-center flex items-center justify-center">
                                <i class="fas fa-user-plus mr-2"></i>Tambah Anggota
                            </a>
                            @endif
                            <a href="{{ route('guest.posyandu.index') }}" 
                               class="w-full bg-gray-600 text-white py-3 px-4 rounded-lg hover:bg-gray-700 transition-colors font-semibold text-center flex items-center justify-center">
                                <i class="fas fa-list mr-2"></i>Lihat Semua Posyandu
                            </a>
                        </div>
                    </div>

                    <!-- Informasi Tambahan -->
                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Penting</h3>
                        <div class="space-y-3 text-sm text-gray-700">
                            <div class="flex items-start">
                                <i class="fas fa-clock text-blue-600 mt-1 mr-2"></i>
                                <span>Buka setiap hari kerja</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-baby text-blue-600 mt-1 mr-2"></i>
                                <span>Gratis untuk semua layanan</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-users text-blue-600 mt-1 mr-2"></i>
                                <span>Dilayani oleh kader terlatih</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-stethoscope text-blue-600 mt-1 mr-2"></i>
                                <span>Didukung oleh tenaga kesehatan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Statistik - BAGIAN YANG DIPERBAIKI DENGAN SOLUSI NOMOR 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistik</h3>
                        <div class="space-y-3">
                            <!-- SOLUSI NOMOR 8: Debug info untuk statistik -->
                            @php
                                $totalAnggota = $anggotaList->count();
                                $kaderCount = $anggotaList->where('jabatan', 'like', '%Kader%')->count();
                                $lakiCount = $anggotaList->where('jenis_kelamin', 'L')->count();
                                $perempuanCount = $anggotaList->where('jenis_kelamin', 'P')->count();
                                
                                echo "<!-- DEBUG STATS: Total=$totalAnggota, Kader=$kaderCount, L=$lakiCount, P=$perempuanCount -->";
                            @endphp
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Total Anggota</span>
                                <span class="font-semibold text-blue-600">{{ $totalAnggota }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Kader Aktif</span>
                                <span class="font-semibold text-green-600">{{ $kaderCount }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Laki-laki</span>
                                <span class="font-semibold text-blue-600">{{ $lakiCount }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Perempuan</span>
                                <span class="font-semibold text-pink-600">{{ $perempuanCount }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelola Data Section -->
        <div class="bg-green-50 border border-green-200 rounded-lg p-6 mt-8">
            <h3 class="text-lg font-semibold text-green-800 mb-4">Kelola Data Posyandu</h3>
            <p class="text-green-600 mb-4 text-sm">Anda dapat membantu memperbarui data posyandu ini atau menambahkan anggota baru.</p>
            <div class="flex flex-wrap gap-3">
                @if(isset($posyandu->id))
                <a href="{{ route('guest.posyandu.edit', $posyandu->id) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors font-semibold text-sm">
                    <i class="fas fa-edit mr-2"></i>Edit Data
                </a>
                <a href="{{ route('guest.posyandu.anggota.create', $posyandu->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold text-sm">
                    <i class="fas fa-user-plus mr-2"></i>Tambah Anggota
                </a>
                <form action="{{ route('guest.posyandu.destroy', $posyandu->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors font-semibold text-sm" onclick="return confirm('Yakin ingin menghapus data posyandu ini?')">
                        <i class="fas fa-trash mr-2"></i>Hapus
                    </button>
                </form>
                @endif
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ route('guest.posyandu.index') }}" 
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Daftar Posyandu
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-baby text-white"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">POSYANDU SEHAT</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Sistem Informasi Posyandu Terpadu untuk mendukung kesehatan ibu dan anak Indonesia.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('guest') }}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('guest.posyandu.index') }}" class="hover:text-white transition-colors">Data Posyandu</a></li>
                        <li><a href="{{ route('auth.login') }}" class="hover:text-white transition-colors">Login Admin</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span>info@posyandusehat.id</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 POSYANDU SEHAT. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- SOLUSI NOMOR 8: JavaScript Debug Console -->
    <script>
        console.log('=== DEBUG POSYANDU SHOW ===');
        console.log('Posyandu Data:', @json($posyandu ?? 'NULL'));
        console.log('Anggota Count:', @json(isset($posyandu->anggota) ? $posyandu->anggota->count() : 'NO_ANGGOTA'));
        console.log('Routes:', {
            edit: '{{ route("guest.posyandu.edit", $posyandu->id ?? 0) }}',
            createAnggota: '{{ route("guest.posyandu.anggota.create", $posyandu->id ?? 0) }}',
            destroy: '{{ route("guest.posyandu.destroy", $posyandu->id ?? 0) }}'
        });
        console.log('=== END DEBUG ===');
    </script>
</body>
</html>