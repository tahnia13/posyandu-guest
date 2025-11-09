@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Warga</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('warga.update', $warga->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                           id="nama" name="nama" value="{{ old('nama', $warga->nama) }}" required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" 
                                           id="nik" name="nik" value="{{ old('nik', $warga->nik) }}" required maxlength="16">
                                    @error('nik')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="usia" class="form-label">Usia <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('usia') is-invalid @enderror" 
                                           id="usia" name="usia" value="{{ old('usia', $warga->usia) }}" min="0" max="120" required>
                                    @error('usia')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                    <select class="form-select @error('jenis_kelamin') is-invalid @enderror" 
                                            id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin', $warga->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-select @error('status') is-invalid @enderror" 
                                            id="status" name="status" required>
                                        <option value="aktif" {{ old('status', $warga->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                        <option value="tidak_aktif" {{ old('status', $warga->status) == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                      id="alamat" name="alamat" rows="3" required>{{ old('alamat', $warga->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="posyandu_id" class="form-label">Posyandu</label>
                            <select class="form-select @error('posyandu_id') is-invalid @enderror" 
                                    id="posyandu_id" name="posyandu_id">
                                <option value="">Pilih Posyandu (Opsional)</option>
                                @foreach($posyandus as $posyandu)
                                    <option value="{{ $posyandu->id }}" {{ old('posyandu_id', $warga->posyandu_id) == $posyandu->id ? 'selected' : '' }}>
                                        {{ $posyandu->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('posyandu_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('warga.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection