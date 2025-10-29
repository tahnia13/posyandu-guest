    @extends('layouts.app')

@section('title', 'Tambah Posyandu - POSYANDU SEHAT')

@section('content')
<div class="container">
    <div class="section-title">
        <h2>Tambah Posyandu Baru</h2>
        <p>Isi form berikut untuk menambahkan posyandu baru</p>
    </div>

    <div class="form-container">
        <form action="{{ route('posyandu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-row">
                <div class="form-group">
                    <label for="nama_posyandu">Nama Posyandu *</label>
                    <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" value="{{ old('nama_posyandu') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="penanggung_jawab">Penanggung Jawab *</label>
                    <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" value="{{ old('penanggung_jawab') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Lengkap *</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="kelurahan">Kelurahan *</label>
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{ old('kelurahan') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="kecamatan">Kecamatan *</label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="kota">Kota/Kabupaten *</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="{{ old('kota') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="provinsi">Provinsi *</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ old('provinsi') }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon') }}">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="jam_operasional_buka">Jam Buka *</label>
                    <input type="time" class="form-control" id="jam_operasional_buka" name="jam_operasional_buka" value="{{ old('jam_operasional_buka', '08:00') }}" required>
                </div>
                
                <div class="form-group">
                    <label for="jam_operasional_tutup">Jam Tutup *</label>
                    <input type="time" class="form-control" id="jam_operasional_tutup" name="jam_operasional_tutup" value="{{ old('jam_operasional_tutup', '16:00') }}" required>
                </div>
            </div>

            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" placeholder="Contoh: Ruang pemeriksaan, Timbangan bayi, Alat ukur tinggi badan">{{ old('fasilitas') }}</textarea>
            </div>

            <div class="form-group">
                <label for="layanan">Layanan</label>
                <textarea class="form-control" id="layanan" name="layanan" rows="3" placeholder="Contoh: Imunisasi, Pemeriksaan ibu hamil, Konsultasi gizi">{{ old('layanan') }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="number" step="any" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}" placeholder="-6.2088">
                </div>
                
                <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="number" step="any" class="form-control" id="longitude" name="longitude" value="{{ old('longitude') }}" placeholder="106.8456">
                </div>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Posyandu</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                <small class="form-text text-muted">Format: JPEG, PNG, JPG, GIF (Maks. 2MB)</small>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-register">Simpan Posyandu</button>
                <a href="{{ route('posyandu.index') }}" class="btn-cancel">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-container {
        background: var(--white);
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        max-width: 800px;
        margin: 0 auto;
    }
    
    .form-row {
        display: flex;
        gap: 1rem;
    }
    
    .form-row .form-group {
        flex: 1;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--dark);
        font-weight: 500;
    }
    
    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }
    
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
    }
    
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .btn-register {
        background: var(--primary);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 500;
    }
    
    .btn-register:hover {
        background: #2980b9;
    }
    
    .btn-cancel {
        background: #6c757d;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
    }
    
    .btn-cancel:hover {
        background: #5a6268;
        color: white;
    }
    
    .form-text {
        font-size: 0.85rem;
        color: var(--gray);
        margin-top: 0.25rem;
    }
</style>
@endpush