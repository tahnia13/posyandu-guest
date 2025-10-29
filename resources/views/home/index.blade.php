@extends('layouts.app')

@section('title', 'POSYANDU SEHAT - Sistem Informasi Posyandu Terpadu')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h2>Solusi Kesehatan Ibu dan Anak di Tangan Anda</h2>
        <p>Mendukung kesehatan ibu dan anak melalui pelayanan posyandu yang terintegrasi dan modern dengan standar Kemenkes RI</p>
        
        <div class="search-box">
            <form action="{{ route('cari') }}" method="GET">
                <input type="text" name="q" placeholder="Cari layanan, artikel, atau posyandu..." value="{{ request('q') }}">
                <button type="submit"><i class="fas fa-search"></i> Cari</button>
            </form>
        </div>
    </div>
</section>

<!-- Layanan Unggulan -->
<section class="services">
    <div class="container">
        <div class="section-title">
            <h2>Layanan Unggulan</h2>
            <p>Berbagai layanan kesehatan ibu dan anak yang tersedia di posyandu terdekat</p>
        </div>
        
        <div class="services-grid">
            @foreach($layanan as $item)
            <div class="service-card" style="border-top-color: {{ $item->warna }};">
                <div class="service-icon" style="background-color: {{ $item->warna }}20; color: {{ $item->warna }};">
                    <i class="{{ $item->icon }}"></i>
                </div>
                <h3>{{ $item->nama }}</h3>
                <p>{{ $item->deskripsi_singkat }}</p>
                <a href="{{ route('layanan.detail', $item->slug) }}" class="service-link" style="color: {{ $item->warna }};">
                    Selengkapnya <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>{{ $stats['total_posyandu'] }}+</h3>
                <p>Posyandu Aktif</p>
            </div>
            <div class="stat-item">
                <h3>{{ $stats['total_anak'] }}+</h3>
                <p>Anak Terlayani</p>
            </div>
            <div class="stat-item">
                <h3>{{ $stats['total_ibu'] }}+</h3>
                <p>Ibu Terlayani</p>
            </div>
            <div class="stat-item">
                <h3>{{ $stats['total_layanan'] }}+</h3>
                <p>Jenis Layanan</p>
            </div>
        </div>
    </div>
</section>

<!-- Artikel Terbaru -->
<section class="features">
    <div class="container">
        <div class="section-title">
            <h2>Artikel Kesehatan Terbaru</h2>
            <p>Informasi dan tips kesehatan terbaru untuk ibu dan anak</p>
        </div>
        
        <div class="features-grid">
            @foreach($artikel as $item)
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="feature-content">
                    <h3>{{ $item->judul }}</h3>
                    <p>{{ $item->deskripsi }}</p>
                    <div class="article-meta">
                        <span><i class="fas fa-user"></i> {{ $item->penulis }}</span>
                        <span><i class="fas fa-calendar"></i> {{ $item->tanggal }}</span>
                    </div>
                    <a href="{{ route('artikel.detail', $item->slug) }}" class="service-link">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h2>Siap Memulai Perjalanan Kesehatan Anda?</h2>
        <p>Daftar sekarang untuk mendapatkan akses ke semua layanan posyandu terdekat dan informasi kesehatan terupdate</p>
        <div class="cta-buttons">
            <a href="{{ route('register') }}" class="btn-register">Daftar Sekarang</a>
            <a href="{{ route('layanan') }}" class="btn-login" style="background: rgba(255,255,255,0.2); color: white; border: 1px solid white;">Lihat Layanan</a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .hero {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: var(--white);
        padding: 4rem 0;
        text-align: center;
    }
    
    .hero h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }
    
    .hero p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto 2rem;
        opacity: 0.9;
    }
    
    .search-box {
        max-width: 600px;
        margin: 0 auto;
        position: relative;
    }
    
    .search-box input {
        width: 100%;
        padding: 15px 20px;
        border-radius: 30px;
        border: none;
        font-size: 1rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .search-box button {
        position: absolute;
        right: 5px;
        top: 5px;
        background-color: var(--primary);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        font-weight: 500;
    }
    
    .services {
        padding: 4rem 0;
    }
    
    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title h2 {
        font-size: 2rem;
        color: var(--dark);
        margin-bottom: 1rem;
    }
    
    .section-title p {
        color: var(--gray);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }
    
    .service-card {
        background-color: var(--white);
        padding: 30px 25px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        border-top: 4px solid;
    }
    
    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .service-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 auto 20px;
    }
    
    .service-card h3 {
        margin-bottom: 15px;
        color: var(--dark);
        font-size: 1.3rem;
    }
    
    .service-card p {
        color: var(--gray);
        margin-bottom: 20px;
    }
    
    .service-link {
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    
    .features {
        padding: 4rem 0;
        background-color: var(--primary-light);
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }
    
    .feature-card {
        background-color: var(--white);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }
    
    .feature-icon {
        font-size: 2rem;
        color: var(--primary);
        background-color: var(--primary-light);
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        flex-shrink: 0;
    }
    
    .feature-content h3 {
        margin-bottom: 10px;
        color: var(--dark);
    }
    
    .feature-content p {
        color: var(--gray);
        margin-bottom: 15px;
    }
    
    .article-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        font-size: 0.9rem;
        color: var(--gray);
    }
    
    .article-meta span {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .stats {
        padding: 4rem 0;
        background-color: var(--white);
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        text-align: center;
    }
    
    .stat-item h3 {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 10px;
    }
    
    .stat-item p {
        color: var(--gray);
        font-weight: 500;
    }
    
    .cta {
        padding: 4rem 0;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: var(--white);
        text-align: center;
    }
    
    .cta h2 {
        font-size: 2.2rem;
        margin-bottom: 1rem;
    }
    
    .cta p {
        max-width: 600px;
        margin: 0 auto 2rem;
        opacity: 0.9;
    }
    
    .cta-buttons {
        display: flex;
        gap: 15px;
        justify-content: center;
    }
</style>
@endpush