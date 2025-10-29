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

    <div class="action-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <a href="{{ route('posyandu.create') }}" class="btn-register">
            <i class="fas fa-plus"></i> Tambah Posyandu
        </a>
        
        <div class="search-box" style="max-width: 300px;">
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
                <p class="jam-operasional"><i class="fas fa-clock"></i> {{ $posyandu->jam_operasional }}</p>
                
                @if($posyandu->telepon)
                <p class="telepon"><i class="fas fa-phone"></i> {{ $posyandu->telepon }}</p>
                @endif
                
                <div class="posyandu-actions">
                    <a href="{{ route('posyandu.show', $posyandu->id) }}" class="btn-detail">Detail</a>
                    <a href="{{ route('posyandu.edit', $posyandu->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('posyandu.destroy', $posyandu->id) }}" method="POST" style="display: inline;">
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
            <i class="fas fa-clinic-medical" style="font-size: 4rem; color: #ccc; margin-bottom: 1rem;"></i>
            <h3>Belum ada posyandu</h3>
            <p>Silakan tambah posyandu pertama Anda</p>
            <a href="{{ route('posyandu.create') }}" class="btn-register">Tambah Posyandu</a>
        </div>
        @endif
    </div>
</div>
@endsection

@push('styles')
<style>
    .posyandu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
        margin-top: 2rem;
    }
    
    .posyandu-card {
        background: var(--white);
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
        background: var(--primary-light);
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
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        font-size: 3rem;
    }
    
    .posyandu-content {
        padding: 1.5rem;
    }
    
    .posyandu-content h3 {
        color: var(--dark);
        margin-bottom: 1rem;
        font-size: 1.3rem;
    }
    
    .posyandu-content p {
        margin-bottom: 0.5rem;
        color: var(--gray);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .posyandu-content p i {
        width: 16px;
        color: var(--primary);
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
    }
    
    .btn-detail {
        background: var(--primary);
        color: white;
        border: 1px solid var(--primary);
    }
    
    .btn-detail:hover {
        background: #2980b9;
    }
    
    .btn-edit {
        background: var(--secondary);
        color: white;
        border: 1px solid var(--secondary);
    }
    
    .btn-edit:hover {
        background: #27ae60;
    }
    
    .btn-delete {
        background: #e74c3c;
        color: white;
        border: 1px solid #e74c3c;
        cursor: pointer;
    }
    
    .btn-delete:hover {
        background: #c0392b;
    }
    
    .no-data {
        text-align: center;
        padding: 3rem;
        grid-column: 1 / -1;
    }
    
    .action-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    #searchInput {
        padding: 10px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        width: 100%;
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
    // Search functionality
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