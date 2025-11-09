@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Posyandu</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('posyandu.update', $posyandu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Posyandu <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" name="nama" value="{{ old('nama', $posyandu->nama) }}" required>
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                      id="alamat" name="alamat" rows="3" required>{{ old('alamat', $posyandu->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jadwal" class="form-label">Jadwal <span class="text-danger">*</span></label>
                            <select class="form-select @error('jadwal') is-invalid @enderror" 
                                    id="jadwal" name="jadwal" required>
                                <option value="">Pilih Jam Operasional</option>
                                <option value="07:00-10:00" {{ old('jadwal', $posyandu->jadwal) == '07:00-10:00' ? 'selected' : '' }}>07:00 - 10:00</option>
                                <option value="08:00-11:00" {{ old('jadwal', $posyandu->jadwal) == '08:00-11:00' ? 'selected' : '' }}>08:00 - 11:00</option>
                                <option value="09:00-12:00" {{ old('jadwal', $posyandu->jadwal) == '09:00-12:00' ? 'selected' : '' }}>09:00 - 12:00</option>
                                <option value="13:00-16:00" {{ old('jadwal', $posyandu->jadwal) == '13:00-16:00' ? 'selected' : '' }}>13:00 - 16:00</option>
                                <option value="14:00-17:00" {{ old('jadwal', $posyandu->jadwal) == '14:00-17:00' ? 'selected' : '' }}>14:00 - 17:00</option>
                                <option value="15:00-18:00" {{ old('jadwal', $posyandu->jadwal) == '15:00-18:00' ? 'selected' : '' }}>15:00 - 18:00</option>
                                <option value="17:00-20:00" {{ old('jadwal', $posyandu->jadwal) == '17:00-20:00' ? 'selected' : '' }}>17:00 - 20:00</option>
                                <option value="18:00-21:00" {{ old('jadwal', $posyandu->jadwal) == '18:00-21:00' ? 'selected' : '' }}>18:00 - 21:00</option>
                            </select>
                            @error('jadwal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posyandu.index') }}" class="btn btn-secondary">
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