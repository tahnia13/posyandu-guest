@extends('layouts.app')

@section('title', 'Daftar Posyandu - POSYANDU SEHAT')

@section('content')
<div class="container">
    <div class="section-title">
        <h2>Daftar Posyandu</h2>
        <p>Temukan posyandu terdekat di lokasi Anda</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="action-bar">
        <a href="{{ route('posyandu.create') }}" class="btn-add">
            <i class="fas fa-plus"></i> Tambah Posyandu
        </a>

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Cari posyandu...">
        </div>
    </div>

    <div class="posyandu-grid" id="posyanduGrid">
        @foreach($posyandus as $posyandu)
        <div class="posyandu-card" data-name="{{ strtolower($posyandu->nama_posyandu) }}" data-location="{{ strtolower($posyandu->kecamatan) }}">
            @if($posyandu->gambar)
                <div class="posyandu-image">
                    <img src="{{ asset('storage/' . $posyandu->gambar) }}" alt="{{ $posyandu->nama_posyandu }}">
                </div>
            @else
                <div class="posyandu-image no-image">
                    <i class="fas fa-clinic-medical"></i>
                </div>
            @endif

            <div class="posyandu-content">
                <h3>{{ $posyandu->nama_posyandu }}</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> {{ $posyandu->kelurahan }}, {{ $posyandu->kecamatan }}</p>
                <p class="penanggung-jawab"><i class="fas fa-user"></i> {{ $posyandu->penanggung_jawab }}</p>
                <p class="jam-operasional"><i class="fas fa-clock"></i> {{ date('H:i', strtotime($posyandu->jam_operasional_buka)) }} - {{ date('H:i', strtotime($posyandu->jam_operasional_tutup)) }}</p>

                @if($posyandu->telepon)
                <p class="telepon"><i class="fas fa-phone"></i> {{ $posyandu->telepon }}</p>
                @endif

                <div class="posyandu-actions">
                    <a href="{{ route('posyandu.show', $posyandu->id) }}" class="btn-detail">Detail</a>
                    <a href="{{ route('posyandu.edit', $posyandu->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('posyandu.destroy', $posyandu->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus posyandu ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        @if($posyandus->isEmpty())
        <div class="no-data">
            <i class="fas fa-clinic-medical"></i>
            <h3>Belum ada posyandu</h3>
            <p>Silakan tambah posyandu pertama Anda</p>
            <a href="{{ route('posyandu.create') }}" class="btn-add">Tambah Posyandu</a>
        </div>
        @endif
    </div>
</div>
@endsection

@push('styles')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2rem;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .section-title p {
        color: #7f8c8d;
        max-width: 600px;
        margin: 0 auto;
    }

    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .btn-add {
        background: #3498db;
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s;
    }

    .btn-add:hover {
        background: #2980b9;
        color: white;
    }

    .search-box {
        max-width: 300px;
    }

    #searchInput {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        font-size: 1rem;
    }

    .posyandu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
    }

    .posyandu-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .posyandu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .posyandu-image {
        height: 200px;
        background: #ebf5fb;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .posyandu-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .posyandu-image.no-image {
        background: linear-gradient(135deg, #3498db 0%, #2ecc71 100%);
        color: white;
        font-size: 3rem;
    }

    .posyandu-content {
        padding: 1.5rem;
    }

    .posyandu-content h3 {
        color: #2c3e50;
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }

    .posyandu-content p {
        margin-bottom: 0.5rem;
        color: #7f8c8d;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .posyandu-content p i {
        width: 16px;
        color: #3498db;
    }

    .posyandu-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 1rem;
        flex-wrap: wrap;
    }

    .btn-detail, .btn-edit, .btn-delete {
        padding: 6px 12px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-detail {
        background: #3498db;
        color: white;
    }

    .btn-detail:hover {
        background: #2980b9;
    }

    .btn-edit {
        background: #2ecc71;
        color: white;
    }

    .btn-edit:hover {
        background: #27ae60;
    }

    .btn-delete {
        background: #e74c3c;
        color: white;
    }

    .btn-delete:hover {
        background: #c0392b;
    }

    .delete-form {
        display: inline;
    }

    .no-data {
        text-align: center;
        padding: 3rem;
        grid-column: 1 / -1;
    }

    .no-data i {
        font-size: 4rem;
        color: #bdc3c7;
        margin-bottom: 1rem;
    }

    .no-data h3 {
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .no-data p {
        color: #7f8c8d;
        margin-bottom: 1.5rem;
    }

    .alert {
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 1rem;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById('searchInput').addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const cards = document.querySelectorAll('.posyandu-card');

        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            const location = card.getAttribute('data-location');

            if (name.includes(searchTerm) || location.includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
</script>
@endpush
