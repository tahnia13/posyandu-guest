@extends('layouts.app')

@section('title', 'Layanan - POSYANDU SEHAT')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Layanan Kami</h1>
        <p>Berbagai layanan kesehatan profesional untuk kebutuhan Anda</p>
        
        <div class="search-box">
            <input type="text" placeholder="Cari layanan kesehatan...">
            <button type="button">
                <i class="fas fa-search"></i> Cari
            </button>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <!-- Layanan Medis -->
        <div class="service-card-large">
            <div class="service-header">
                <div class="service-icon-large">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <div class="service-title-section">
                    <h2>Layanan Medis</h2>
                    <p>Layanan medis profesional dengan standar tertinggi</p>
                </div>
                <a href="#" class="btn-service">
                    <i class="fas fa-calendar-check"></i> Book Now
                </a>
            </div>
            
            <div class="service-features-grid">
                <div class="feature-item">
                    <i class="fas fa-user-md"></i>
                    <h4>Dokter Spesialis</h4>
                    <p>Tenaga medis profesional berpengalaman</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-hospital"></i>
                    <h4>Fasilitas Lengkap</h4>
                    <p>Peralatan medis modern dan lengkap</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Standar Tinggi</h4>
                    <p>Mengikuti standar Kemenkes RI</p>
                </div>
            </div>
        </div>

        <!-- Layanan Populer -->
        <div class="section-title">
            <h2>Layanan Populer</h2>
            <p>Layanan kesehatan yang paling banyak dicari</p>
        </div>

        <div class="services-grid">
            <!-- Konsultasi Dokter -->
            <div class="service-card popular">
                <div class="popular-badge">
                    <i class="fas fa-star"></i> Populer
                </div>
                <div class="service-icon">
                    <i class="fas fa-comment-medical"></i>
                </div>
                <h3>Konsultasi Dokter</h3>
                <p>Konsultasi dengan dokter spesialis berpengalaman</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Dokter spesialis anak</li>
                    <li><i class="fas fa-check"></i> Dokter kandungan</li>
                    <li><i class="fas fa-check"></i> Konsultasi online</li>
                    <li><i class="fas fa-check"></i> Gratis biaya konsultasi</li>
                </ul>
                <a href="#" class="btn-service btn-outline">
                    <i class="fas fa-info-circle"></i> Detail
                </a>
            </div>

            <!-- Apotek -->
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
                    <li><i class="fas fa-check"></i> Konsultasi apoteker</li>
                </ul>
                <a href="#" class="btn-service">
                    <i class="fas fa-calendar-check"></i> Book Now
                </a>
            </div>

            <!-- Imunisasi -->
            <div class="service-card popular">
                <div class="popular-badge">
                    <i class="fas fa-star"></i> Populer
                </div>
                <div class="service-icon">
                    <i class="fas fa-syringe"></i>
                </div>
                <h3>Imunisasi</h3>
                <p>Layanan imunisasi lengkap untuk bayi dan anak</p>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Imunisasi dasar lengkap</li>
                    <li><i class="fas fa-check"></i> Vaksin booster</li>
                    <li><i class="fas fa-check"></i> Pemantauan efek samping</li>
                    <li><i class="fas fa-check"></i> Kartu monitoring</li>
                </ul>
                <a href="#" class="btn-service">
                    <i class="fas fa-calendar-check"></i> Book Now
                </a>
            </div>
        </div>

        <!-- Layanan Lainnya -->
        <div class="additional-services">
            <div class="section-title">
                <h2>Layanan Lainnya</h2>
                <p>Berbagai layanan kesehatan tambahan untuk keluarga Anda</p>
            </div>

            <div class="services-grid">
                <!-- Pemeriksaan Bayi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3>Pemeriksaan Bayi</h3>
                    <p>Pemeriksaan kesehatan rutin dan tumbuh kembang bayi</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Pengukuran antropometri</li>
                        <li><i class="fas fa-check"></i> Deteksi dini gangguan</li>
                        <li><i class="fas fa-check"></i> Konsultasi gizi</li>
                    </ul>
                    <a href="#" class="btn-service btn-outline">
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </div>

                <!-- Kesehatan Ibu -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <h3>Kesehatan Ibu</h3>
                    <p>Pelayanan kesehatan komprehensif untuk ibu</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Pemeriksaan kehamilan</li>
                        <li><i class="fas fa-check"></i> Konseling menyusui</li>
                        <li><i class="fas fa-check"></i> Keluarga berencana</li>
                    </ul>
                    <a href="#" class="btn-service btn-outline">
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </div>

                <!-- Pemantauan Gizi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-weight-scale"></i>
                    </div>
                    <h3>Pemantauan Gizi</h3>
                    <p>Assesment status gizi dan intervensi pencegahan stunting</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Screening status gizi</li>
                        <li><i class="fas fa-check"></i> Konsultasi gizi seimbang</li>
                        <li><i class="fas fa-check"></i> Program PMT</li>
                    </ul>
                    <a href="#" class="btn-service btn-outline">
                        <i class="fas fa-info-circle"></i> Detail
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="contact-section">
            <h3>Butuh Layanan Lainnya?</h3>
            <p>Hubungi kami untuk informasi lebih lanjut</p>
            <a href="{{ route('kontak') }}" class="btn-service">
                <i class="fas fa-phone"></i> Kontak Kami
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .service-card-large {
        background: var(--white);
        border-radius: 20px;
        padding: 2.5rem;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        margin-bottom: 3rem;
        border: 2px solid var(--primary);
    }

    .service-header {
        display: flex;
        align-items: center;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .service-icon-large {
        font-size: 4rem;
        color: var(--primary);
        background: var(--primary-light);
        padding: 1.5rem;
        border-radius: 20px;
    }

    .service-title-section {
        flex: 1;
    }

    .service-title-section h2 {
        font-size: 2rem;
        color: var(--primary);
        margin-bottom: 0.5rem;
    }

    .service-title-section p {
        font-size: 1.1rem;
        color: var(--gray);
        margin: 0;
    }

    .service-features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .feature-item {
        text-align: center;
        padding: 1.5rem;
        background: var(--primary-light);
        border-radius: 15px;
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
        background: var(--primary);
    }

    .feature-item:hover i,
    .feature-item:hover h4,
    .feature-item:hover p {
        color: var(--white);
    }

    .feature-item i {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1rem;
    }

    .feature-item h4 {
        font-size: 1.2rem;
        color: var(--dark);
        margin-bottom: 0.5rem;
    }

    .feature-item p {
        color: var(--gray);
        font-size: 0.9rem;
    }

    .popular-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: var(--accent);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .service-card {
        position: relative;
    }

    .additional-services {
        margin-top: 4rem;
    }

    @media (max-width: 768px) {
        .service-header {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .service-icon-large {
            font-size: 3rem;
            padding: 1rem;
        }

        .service-title-section h2 {
            font-size: 1.5rem;
        }

        .service-features-grid {
            grid-template-columns: 1fr;
        }

        .service-card-large {
            padding: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Search functionality for services page
    document.querySelector('.search-box button').addEventListener('click', function() {
        const searchTerm = document.querySelector('.search-box input').value;
        if (searchTerm.trim() !== '') {
            // Filter services based on search term
            filterServices(searchTerm);
        }
    });

    document.querySelector('.search-box input').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            document.querySelector('.search-box button').click();
        }
    });

    function filterServices(searchTerm) {
        const services = document.querySelectorAll('.service-card');
        let found = false;
        
        services.forEach(service => {
            const serviceText = service.textContent.toLowerCase();
            if (serviceText.includes(searchTerm.toLowerCase())) {
                service.style.display = 'block';
                found = true;
            } else {
                service.style.display = 'none';
            }
        });

        if (!found) {
            alert('Tidak ditemukan layanan dengan kata kunci: ' + searchTerm);
            // Show all services if no match found
            services.forEach(service => {
                service.style.display = 'block';
            });
        }
    }
</script>
@endpush