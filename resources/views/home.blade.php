@extends('layouts.app')

@section('title', 'POSYANDU SEHAT - Solusi Kesehatan Ibu dan Anak')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Solusi Kesehatan Ibu dan Anak di Tangan Anda</h1>
            <p>Mendukung kesehatan ibu dan anak melalui pelayanan posyandu yang terintegrasi dan modern dengan standar Kemenkes RI</p>
            
            <div class="search-box">
                <input type="text" placeholder="Cari layanan, artikel, atau posyandu...">
                <button type="button">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Unggulan</h2>
                <p>Berbagai layanan kesehatan ibu dan anak yang tersedia di posyandu terdekat</p>
            </div>
            
            <div class="services-grid">
                <!-- Layanan 1 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Layanan Medis</h3>
                    <p>Layanan medis profesional dengan standar tertinggi</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Tenaga medis profesional</li>
                        <li><i class="fas fa-check"></i> Peralatan medis lengkap</li>
                        <li><i class="fas fa-check"></i> Standar Kemenkes RI</li>
                    </ul>
                    <a href="#" class="btn-service">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                </div>
                
                <!-- Layanan 2 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>Konsultasi Dokter</h3>
                    <p>Konsultasi dengan dokter spesialis berpengalaman</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Dokter spesialis anak</li>
                        <li><i class="fas fa-check"></i> Dokter kandungan</li>
                        <li><i class="fas fa-check"></i> Konsultasi gratis</li>
                    </ul>
                    <a href="#" class="btn-service btn-outline">
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </div>
                
                <!-- Layanan 3 -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h3>Apotek</h3>
                    <p>Obat-obatan lengkap dengan resep dokter</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Obat generik tersedia</li>
                        <li><i class="fas fa-check"></i> Resep dokter</li>
                        <li><i class="fas fa-check"></i> Harga terjangkau</li>
                    </ul>
                    <a href="#" class="btn-service">
                        <i class="fas fa-calendar-check"></i> Book Now
                    </a>
                </div>
            </div>
            
            <!-- Contact Section -->
            <div class="contact-section">
                <h3>Butuh Layanan Lainnya?</h3>
                <p>Hubungi kami untuk informasi lebih lanjut</p>
                <a href="#" class="btn-service">
                    <i class="fas fa-phone"></i> Kontak Kami
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Simple search functionality
    document.querySelector('.search-box button').addEventListener('click', function() {
        const searchTerm = document.querySelector('.search-box input').value;
        if (searchTerm.trim() !== '') {
            alert('Mencari: ' + searchTerm);
            // Implement search functionality here
        }
    });
    
    // Enter key support for search
    document.querySelector('.search-box input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.querySelector('.search-box button').click();
        }
    });
</script>
@endpush