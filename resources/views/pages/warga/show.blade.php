@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Detail Data Warga</h4>
                    <div class="btn-group">
                        <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-2"></i>Edit
                        </a>
                        <a href="{{ route('warga.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="40%">Nama Lengkap</th>
                                    <td>{{ $warga->nama }}</td>
                                </tr>
                                <tr>
                                    <th>NIK</th>
                                    <td>{{ $warga->nik }}</td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <td>{{ $warga->usia }} tahun</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>
                                        <span class="badge bg-info">{{ $warga->jenis_kelamin }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="40%">Status</th>
                                    <td>
                                        <span class="badge {{ $warga->status == 'aktif' ? 'bg-success' : 'bg-warning' }}">
                                            {{ ucfirst($warga->status) }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Posyandu</th>
                                    <td>
                                        @if($warga->posyandu)
                                            <span class="badge bg-primary">{{ $warga->posyandu->nama }}</span>
                                            <br>
                                            <small class="text-muted">
                                                Alamat: {{ $warga->posyandu->alamat }}<br>
                                                Jadwal: {{ $warga->posyandu->jadwal }}
                                            </small>
                                        @else
                                            <span class="badge bg-secondary">Belum Terdaftar</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal Dibuat</th>
                                    <td>{{ $warga->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Terakhir Diupdate</th>
                                    <td>{{ $warga->updated_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Alamat Lengkap</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">{{ $warga->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection