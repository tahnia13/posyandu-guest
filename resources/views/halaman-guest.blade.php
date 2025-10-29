<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu - Dinas Kesehatan Kota Rumbai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .header-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .section-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        .footer-bg {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="header-bg text-white">
        <!-- Top Bar -->
        <div class="bg-blue-900 py-2">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center text-sm">
                    <div class="flex space-x-4">
                        <span><i class="fas fa-phone mr-1"></i> (022) 1234567</span>
                        <span><i class="fas fa-envelope mr-1"></i> info@posyandu-rumbai.id</span>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-blue-200"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-blue-200"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-blue-200"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-blue-200"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img src="https://posyandu.bandungkab.go.id/assets/images/logo.png" alt="Logo" class="h-16" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiByeD0iOCIgZmlsbD0iI0ZGRiIvPgo8cGF0aCBkPSJNMzIgMTZDMjUuMzcyNiAxNiAyMCAyMS4zNzI2IDIwIDI4QzIwIDM0LjYyNzQgMjUuMzcyNiA0MCAzMiA0MEMzOC42Mjc0IDQwIDQ0IDM0LjYyNzQgNDQgMjhDNDQgMjEuMzcyNiAzOC42Mjc0IDE2IDMyIDE2Wk0zMiAzNkMyOC42ODYzIDM2IDI2IDMzLjMxMzcgMjYgMzBDMjYgMjYuNjg2MyAyOC42ODYzIDI0IDMyIDI0QzM1LjMxMzcgMjQgMzggMjYuNjg2MyAzOCAzMEMzOCAzMy4zMTM3IDM1LjMxMzcgMzYgMzIgMzZaIiBmaWxsPSIjMTZhM2Y2Ii8+CjxwYXRoIGQ9Ik0yNCA0OEMyNCA0NS43OTA5IDI1Ljc5MDkgNDQgMjggNDRINjRWNjBINjBWNjRIMjhDMjUuNzkwOSA2NCAyNCA2Mi4yMDkxIDI0IDYwVjQ4WiIgZmlsbD0iIzE2YTNmNiIvPgo8L3N2Zz4K'">
                    <div>
                        <h1 class="text-2xl font-bold">DINAS KESEHATAN KOTA RUMBAI</h1>
                        <p class="text-blue-200 text-sm">Sistem Informasi Posyandu Terpadu</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('guest') }}" class="font-semibold hover:text-blue-200 transition-colors">Beranda</a>
                    <a href="{{ route('guest.posyandu.index') }}" class="hover:text-blue-200 transition-colors">Data Posyandu</a>
                    <a href="#layanan" class="hover:text-blue-200 transition-colors">Layanan</a>
                    <a href="#informasi" class="hover:text-blue-200 transition-colors">Informasi</a>
                    <a href="#kontak" class="hover:text-blue-200 transition-colors">Kontak</a>
                    <a href="{{ route('auth.login') }}" class="bg-white text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-50 transition-colors font-semibold">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="header-bg text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold mb-6 leading-tight">
                SELAMAT DATANG DI SISTEM INFORMASI<br>
                <span class="text-yellow-300">POSYANDU KOTA RUMBAI</span>
            </h1>
            <p class="text-xl mb-8 text-blue-100 max-w-4xl mx-auto leading-relaxed">
                Wadah pemberdayaan masyarakat yang dikelola dari, oleh, untuk, dan bersama masyarakat 
                dalam penyelenggaraan pembangunan kesehatan, gizi yang berorientasi pada kesehatan ibu dan anak.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('guest.posyandu.index') }}" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-300 transition-colors text-lg">
                    <i class="fas fa-search mr-2"></i>Cari Posyandu
                </a>
                <a href="#layanan" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors text-lg">
                    <i class="fas fa-info-circle mr-2"></i>Lihat Layanan
                </a>
            </div>
        </div>
    </section>



    <!-- Layanan Section -->
    <section id="layanan" class="section-bg py-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">LAYANAN POSYANDU</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-4"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berbagai layanan kesehatan ibu dan anak yang tersedia di posyandu 
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-baby text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pemantauan Tumbuh Kembang</h3>
                    <p class="text-gray-600">Pemantauan rutin berat badan, tinggi badan, dan perkembangan balita</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-syringe text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Imunisasi</h3>
                    <p class="text-gray-600">Layanan imunisasi lengkap untuk bayi dan balita sesuai jadwal</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-md text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Konsultasi Gizi</h3>
                    <p class="text-gray-600">Konsultasi masalah gizi dan pola makan untuk ibu dan anak</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pills text-red-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pemberian Vitamin</h3>
                    <p class="text-gray-600">Pemberian vitamin A dan suplemen lainnya secara rutin</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book-medical text-yellow-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Penyuluhan Kesehatan</h3>
                    <p class="text-gray-600">Edukasi dan penyuluhan tentang kesehatan ibu dan anak</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-notes-medical text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pencatatan Kesehatan</h3>
                    <p class="text-gray-600">Sistem pencatatan dan pelaporan kesehatan yang terintegrasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Terkini -->
    <section id="informasi" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">INFORMASI TERKINI</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-4"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berita dan informasi terbaru seputar kegiatan posyandu
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-blue-600 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Jadwal Posyandu Bulan Ini</h3>
                        <p class="text-gray-600 mb-4">Lihat jadwal kegiatan posyandu di seluruh Indonesia.</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-green-600 flex items-center justify-center">
                        <i class="fas fa-syringe text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Program Imunisasi Nasional</h3>
                        <p class="text-gray-600 mb-4">Informasi mengenai program imunisasi nasional yang sedang berjalan.</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Baca Selengkapnya →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="h-48 bg-purple-600 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Pelatihan Kader Posyandu</h3>
                        <p class="text-gray-600 mb-4">Pendaftaran pelatihan kader posyandu angkatan terbaru telah dibuka.</p>
                        <a href="#" class="text-blue-600 font-semibold hover:text-blue-800">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-6">Butuh Informasi Lebih Lanjut?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Hubungi kami untuk mendapatkan informasi detail mengenai layanan posyandu 
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#kontak" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-colors text-lg">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
                <a href="{{ route('guest.posyandu.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors text-lg">
                    <i class="fas fa-clinic-medical mr-2"></i>Cari Posyandu
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak" class="footer-bg text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">KONTAK KAMI</h3>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                            <span>Jl. Yos Sudarso</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-blue-400"></i>
                            <span>(022) 1234567</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-blue-400"></i>
                            <span>info@posyandu-rumbai.id</span>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-clock mt-1 mr-3 text-blue-400"></i>
                            <span>Senin - Jumat: 08.00 - 16.00 WIB</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">TAUTAN CEPAT</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('guest') }}" class="text-gray-300 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('guest.posyandu.index') }}" class="text-gray-300 hover:text-white transition-colors">Data Posyandu</a></li>
                        <li><a href="#layanan" class="text-gray-300 hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#informasi" class="text-gray-300 hover:text-white transition-colors">Informasi</a></li>
                        <li><a href="{{ route('auth.login') }}" class="text-gray-300 hover:text-white transition-colors">Login Admin</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">LAYANAN</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Pemantauan Balita</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Imunisasi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Konsultasi Gizi</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Penyuluhan Kesehatan</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">MEDIA SOSIAL</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-300 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-500 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center hover:bg-green-500 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-600 mt-8 pt-8 text-center">
                <p>&copy; 2024 Dinas Kesehatan Kota Rumbai. All rights reserved.</p>
                <p class="text-gray-400 mt-2">Sistem Informasi Posyandu Terpadu</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>