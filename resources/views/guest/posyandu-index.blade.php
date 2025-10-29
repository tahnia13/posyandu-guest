<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posyandu - Sistem Informasi Posyandu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
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
                    <a href="#tentang" class="text-blue-100 hover:text-white transition-colors">
                        <i class="fas fa-info-circle mr-2"></i>Tentang
                    </a>
                    <a href="#kontak" class="text-blue-100 hover:text-white transition-colors">
                        <i class="fas fa-envelope mr-2"></i>Kontak
                    </a>
                    <a href="{{ route('auth.login') }}" class="bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-gray-100 transition-colors font-semibold">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">📋 Data Posyandu Terdaftar</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Informasi lengkap mengenai posyandu yang terdaftar dalam sistem. Data ini dapat diakses secara publik untuk transparansi informasi.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-8 px-4">

        <!-- Search and Filter -->
        <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex-1 w-full md:w-auto">
                    <div class="relative">
                        <input type="text" 
                               id="searchInput"
                               placeholder="Cari nama posyandu atau lokasi..." 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <i class="fas fa-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <select id="kecamatanFilter" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Semua Kecamatan</option>
                        @foreach($kecamatanList as $kecamatan)
                            <option value="{{ $kecamatan }}">{{ $kecamatan }}</option>
                        @endforeach
                    </select>
                    <button onclick="filterPosyandu()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                        <i class="fas fa-filter mr-2"></i>Filter
                    </button>
                </div>
            </div>
        </div>
<!-- Tambahkan di bagian setelah Search and Filter -->
<div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div class="mb-4 md:mb-0">
            <h3 class="text-lg font-semibold text-blue-800 mb-2">Kontribusi Data Posyandu</h3>
            <p class="text-blue-600 text-sm">Bantu lengkapi data posyandu di Kabupaten Bandung dengan menambahkan data baru atau memperbarui data yang sudah ada.</p>
        </div>
        <div class="flex space-x-3">
            <a href="{{ route('guest.posyandu.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                <i class="fas fa-plus mr-2"></i>Tambah Posyandu
            </a>
            <a href="{{ route('guest') }}" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition-colors font-semibold">
                <i class="fas fa-home mr-2"></i>Beranda
            </a>
        </div>
    </div>
</div>
        <!-- Posyandu List -->
        @if($posyandu->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8" id="posyanduContainer">
            @foreach($posyandu as $item)
            <div class="bg-white rounded-xl shadow-sm p-6 card-hover border border-gray-100 posyandu-card" 
                 data-name="{{ strtolower($item->nama_posyandu) }}"
                 data-kecamatan="{{ strtolower($item->kecamatan) }}">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-gray-800">{{ $item->nama_posyandu }}</h3>
                    <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                        Aktif
                    </span>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-blue-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-600">Alamat</p>
                            <p class="font-semibold text-gray-800">{{ $item->alamat ?? 'Belum diisi' }}</p>
                            <p class="text-xs text-gray-500">RT {{ $item->rt ?? '00' }}/RW {{ $item->rw ?? '00' }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-phone text-green-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-600">Kontak</p>
                            <p class="font-semibold text-gray-800">{{ $item->kontak ?? 'Belum diisi' }}</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-share-alt text-purple-600 text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-600">Media Sosial</p>
                            <p class="font-semibold text-gray-800">{{ $item->media_sosial ?? 'Tidak ada' }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                    <div class="text-sm text-gray-600">
                        <i class="fas fa-calendar-alt mr-1"></i>
                        Update: {{ \Carbon\Carbon::parse($item->updated_at)->format('d/m/Y') }}
                    </div>
                    <a href="{{ route('guest.posyandu.show', $item->id) }}" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-semibold text-sm">
                        <i class="fas fa-eye mr-2"></i>Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="bg-white rounded-xl shadow-sm p-12 text-center">
            <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-clinic-medical text-gray-400 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-4">📭 Belum Ada Data Posyandu</h3>
            <p class="text-gray-600 mb-6 max-w-md mx-auto">
                Saat ini belum ada data posyandu yang terdaftar dalam sistem. Silakan hubungi administrator untuk menambahkan data posyandu.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('guest') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                    <i class="fas fa-home mr-2"></i>Kembali ke Beranda
                </a>
                <a href="mailto:admin@posyandu.id" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-50 transition-colors font-semibold">
                    <i class="fas fa-envelope mr-2"></i>Hubungi Admin
                </a>
            </div>
        </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
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
                        <li><a href="#tentang" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#kontak" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jl. Kesehatan No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone"></i>
                            <span>(021) 1234-5678</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span>info@posyandusehat.id</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-400 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-pink-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-green-600 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 POSYANDU SEHAT. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Search functionality
        function filterPosyandu() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const kecamatanFilter = document.getElementById('kecamatanFilter').value.toLowerCase();
            const cards = document.querySelectorAll('.posyandu-card');
            
            cards.forEach(card => {
                const name = card.getAttribute('data-name');
                const kecamatan = card.getAttribute('data-kecamatan');
                
                const matchesSearch = name.includes(searchTerm);
                const matchesKecamatan = kecamatanFilter === '' || kecamatan.includes(kecamatanFilter);
                
                if (matchesSearch && matchesKecamatan) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Real-time search
        document.getElementById('searchInput').addEventListener('input', filterPosyandu);
        document.getElementById('kecamatanFilter').addEventListener('change', filterPosyandu);

        // Enter key to search
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                filterPosyandu();
            }
        });
    </script>
</body>
</html>