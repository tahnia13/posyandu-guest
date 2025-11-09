@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Data Warga</h4>
                    <a href="{{ route('warga.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Tambah Warga
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Usia</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Posyandu</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wargas as $warga)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <strong>{{ $warga->nama }}</strong>
                                    </td>
                                    <td>{{ $warga->nik }}</td>
                                    <td>{{ $warga->usia }} tahun</td>
                                    <td>
                                        <span class="badge bg-info">{{ $warga->jenis_kelamin }}</span>
                                    </td>
                                    <td>{{ Str::limit($warga->alamat, 50) }}</td>
                                    <td>
                                        @if($warga->posyandu)
                                            <span class="badge bg-primary">{{ $warga->posyandu->nama }}</span>
                                        @else
                                            <span class="badge bg-secondary">Belum Terdaftar</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge {{ $warga->status == 'aktif' ? 'bg-success' : 'bg-warning' }}">
                                            {{ ucfirst($warga->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('warga.show', $warga->id) }}" class="btn btn-info" title="Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('warga.destroy', $warga->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Hapus" 
                                                    onclick="return confirm('Yakin ingin menghapus data warga ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center py-4">
                                        <div class="empty-state">
                                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                                            <h5 class="text-muted">Belum ada data warga</h5>
                                            <a href="{{ route('warga.create') }}" class="btn btn-primary mt-2">
                                                <i class="fas fa-plus me-2"></i>Tambah Warga Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($wargas->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $wargas->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection