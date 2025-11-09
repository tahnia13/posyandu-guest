@extends('layouts.app')

@section('content')
<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section light-background">
    <img src="{{ asset('asset-guest/img/hero-bg.jpg') }}" alt="" class="img-fluid" data-aos="fade-in">
    <div class="container position-relative">
      <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
        <h2>MEDILAB</h2>
        <p class="lead">Melayani dengan Hati untuk Kesehatan Masyarakat yang Lebih Baik</p>
        <p class="mb-4">Sistem Manajemen Posyandu Terintegrasi untuk Pelayanan Kesehatan yang Optimal</p>
        <div class="hero-buttons">
          <a href="#posyandu" class="btn btn-primary btn-lg me-3">
            <i class="fas fa-clinic-medical me-2"></i>Lihat Posyandu
          </a>
          <a href="#services" class="btn btn-outline-light btn-lg">
            <i class="fas fa-info-circle me-2"></i>Layanan Kami
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about section">
    <div class="container">
      <div class="row gy-4 gx-5 align-items-center">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <img src="{{ asset('asset-guest/img/about.jpg') }}" class="img-fluid" alt="Tentang Posyandu MEDILAB">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <h3>Tentang Posyandu MEDILAB</h3>
          <p class="lead">Posyandu MEDILAB merupakan pusat pelayanan kesehatan terpadu yang berfokus pada peningkatan kualitas hidup masyarakat melalui layanan kesehatan komprehensif dan terjangkau.</p>
          
          <div class="mb-4">
            <h5>Visi & Misi Kami:</h5>
            <div class="mb-3">
              <strong><i class="fas fa-bullseye text-primary me-2"></i>Visi:</strong>
              <p class="mb-1">"Menjadi pusat pelayanan posyandu terdepan dalam mewujudkan masyarakat sehat, mandiri, dan sejahtera."</p>
            </div>
            <div>
              <strong><i class="fas fa-tasks text-primary me-2"></i>Misi:</strong>
              <ul class="list-unstyled mt-2">
                <li class="mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Menyediakan layanan kesehatan berkualitas untuk semua usia
                </li>
                <li class="mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Meningkatkan kesadaran masyarakat tentang pentingnya kesehatan preventif
                </li>
                <li class="mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Memberdayakan kader posyandu sebagai ujung tombak pelayanan kesehatan
                </li>
                <li class="mb-2">
                  <i class="fas fa-check-circle text-success me-2"></i>
                  Menjalin kemitraan dengan puskesmas dan fasilitas kesehatan lainnya
                </li>
              </ul>
            </div>
          </div>

          <div class="bg-light p-4 rounded">
            <h6 class="text-primary mb-3"><i class="fas fa-heartbeat me-2"></i>Layanan Unggulan:</h6>
            <div class="row">
              <div class="col-md-6">
                <p class="mb-2"><i class="fas fa-baby text-primary me-2"></i>Kesehatan Ibu & Anak</p>
                <p class="mb-2"><i class="fas fa-syringe text-primary me-2"></i>Imunisasi</p>
                <p class="mb-2"><i class="fas fa-pills text-primary me-2"></i>Suplementasi Gizi</p>
              </div>
              <div class="col-md-6">
                <p class="mb-2"><i class="fas fa-stethoscope text-primary me-2"></i>Pemeriksaan Kesehatan</p>
                <p class="mb-2"><i class="fas fa-user-md text-primary me-2"></i>Konseling Kesehatan</p>
                <p class="mb-2"><i class="fas fa-hand-holding-medical text-primary me-2"></i>Pertolongan Pertama</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional Features -->
      <div class="row mt-5" data-aos="fade-up" data-aos-delay="150">
        <div class="col-lg-3 col-md-6 text-center mb-4">
          <div class="feature-item p-4 h-100">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-hand-holding-heart fa-2x text-white"></i>
            </div>
            <h5>Pelayanan Gratis</h5>
            <p class="text-muted mb-0">Semua layanan posyandu tidak dipungut biaya untuk masyarakat</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4">
          <div class="feature-item p-4 h-100">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-users fa-2x text-white"></i>
            </div>
            <h5>Berbasis Komunitas</h5>
            <p class="text-muted mb-0">Dikelola oleh dan untuk masyarakat setempat</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4">
          <div class="feature-item p-4 h-100">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-clock fa-2x text-white"></i>
            </div>
            <h5>Jadwal Teratur</h5>
            <p class="text-muted mb-0">Pelayanan sesuai jadwal yang telah ditentukan</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center mb-4">
          <div class="feature-item p-4 h-100">
            <div class="icon-wrapper mb-3">
              <i class="fas fa-home fa-2x text-white"></i>
            </div>
            <h5>Lokasi Strategis</h5>
            <p class="text-muted mb-0">Bertempat di lokasi yang mudah dijangkau masyarakat</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Layanan Posyandu</h2>
      <p>Pelayanan kesehatan terpadu yang kami sediakan untuk masyarakat</p>
    </div>
    <div class="container">
      <div class="row gy-4">
        <!-- Layanan 1: KIA -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-baby"></i></div>
            <h3>Kesehatan Ibu & Anak</h3>
            <p>Pemantauan kesehatan ibu hamil, pemeriksaan kehamilan, dan pemantauan tumbuh kembang balita.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Pemeriksaan kehamilan</li>
              <li><i class="fas fa-check"></i> Pemantauan tumbuh kembang</li>
              <li><i class="fas fa-check"></i> Konseling ASI & MPASI</li>
            </ul>
          </div>
        </div>

        <!-- Layanan 2: Imunisasi -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-syringe"></i></div>
            <h3>Imunisasi</h3>
            <p>Pelayanan imunisasi dasar lengkap untuk bayi dan balita guna mencegah penyakit berbahaya.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Imunisasi dasar</li>
              <li><i class="fas fa-check"></i> Imunisasi lanjutan</li>
              <li><i class="fas fa-check"></i> Vaksin booster</li>
            </ul>
          </div>
        </div>

        <!-- Layanan 3: Gizi -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-apple-alt"></i></div>
            <h3>Pelayanan Gizi</h3>
            <p>Pemberian vitamin, suplementasi gizi, dan pemantauan status gizi balita dan ibu hamil.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Pemberian vitamin A</li>
              <li><i class="fas fa-check"></i> Tablet tambah darah</li>
              <li><i class="fas fa-check"></i> Pemantauan status gizi</li>
            </ul>
          </div>
        </div>

        <!-- Layanan 4: Kesehatan Lansia -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-user-friends"></i></div>
            <h3>Kesehatan Lansia</h3>
            <p>Pemeriksaan kesehatan berkala untuk lansia termasuk tekanan darah dan pemeriksaan dasar.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Pemeriksaan tekanan darah</li>
              <li><i class="fas fa-check"></i> Pemeriksaan gula darah</li>
              <li><i class="fas fa-check"></i> Konseling kesehatan lansia</li>
            </ul>
          </div>
        </div>

        <!-- Layanan 5: KB -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-heart"></i></div>
            <h3>Keluarga Berencana</h3>
            <p>Konseling dan pelayanan keluarga berencana untuk pasangan usia subur.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> Konseling KB</li>
              <li><i class="fas fa-check"></i> Alat kontrasepsi</li>
              <li><i class="fas fa-check"></i> Penyuluhan kesehatan reproduksi</li>
            </ul>
          </div>
        </div>

        <!-- Layanan 6: Penyuluhan -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
            <h3>Penyuluhan Kesehatan</h3>
            <p>Edukasi dan penyuluhan tentang pola hidup sehat, sanitasi, dan pencegahan penyakit.</p>
            <ul class="service-features">
              <li><i class="fas fa-check"></i> PHBS (Perilaku Hidup Bersih)</li>
              <li><i class="fas fa-check"></i> Gizi seimbang</li>
              <li><i class="fas fa-check"></i> Pencegahan penyakit</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Additional Info -->
      <div class="row mt-5" data-aos="fade-up" data-aos-delay="400">
        <div class="col-12">
          <div class="alert alert-info text-center">
            <h5><i class="fas fa-info-circle me-2"></i>Informasi Penting</h5>
            <p class="mb-0">Semua layanan posyandu diberikan <strong>GRATIS</strong> untuk masyarakat. Jadwal pelayanan dapat dilihat di masing-masing posyandu.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Posyandu Section -->
  <section id="posyandu" class="posyandu section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Daftar Posyandu</h2>
      <p>Kelola data posyandu di wilayah Anda</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <!-- Tombol Tambah -->
      <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('posyandu.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Tambah Posyandu
        </a>
      </div>

      <!-- Card List Posyandu -->
      <div class="row gy-4">
        @foreach ($posyandus as $posyandu)
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm h-100">
            <div class="card-body d-flex flex-column">
              <div class="card-header bg-transparent border-0 px-0 pt-0">
                <h5 class="card-title mb-0">{{ $posyandu->nama }}</h5>
              </div>
              
              <div class="card-content flex-grow-1">
                <p class="card-text">
                  <strong><i class="fas fa-map-marker-alt me-2"></i>Alamat:</strong><br>
                  {{ $posyandu->alamat }}
                </p>
                <p class="card-text">
                  <strong><i class="fas fa-clock me-2"></i>Jadwal:</strong><br>
                  {{ $posyandu->jadwal }}
                </p>
              </div>

              <div class="card-footer bg-transparent border-0 px-0 pb-0">
                <div class="d-flex justify-content-between">
                  <a href="{{ route('posyandu.edit', $posyandu->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="{{ route('posyandu.destroy', $posyandu->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Jika tidak ada data -->
      @if($posyandus->isEmpty())
        <div class="alert alert-info text-center mt-4">
          <i class="fas fa-clinic-medical me-2"></i>
          Belum ada data posyandu yang terdaftar.
        </div>
      @endif
    </div>
  </section>

  <!-- Warga Section -->
  <section id="warga" class="warga section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Data Warga</h2>
      <p>Data warga yang terdaftar untuk layanan kesehatan</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <!-- Header dengan Informasi -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div class="alert alert-info mb-0 flex-grow-1 me-3">
          <p class="mb-0"><small>Informasi warga bersifat internal dan digunakan untuk pelayanan medis dan pemantauan kesehatan masyarakat.</small></p>
        </div>
        <a href="{{ route('warga.create') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i> Tambah Warga
        </a>
      </div>

      <!-- Card List Warga -->
      <div class="row gy-4">
        @foreach ($wargas as $warga)
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm h-100">
            <div class="card-body d-flex flex-column">
              <!-- Header Card -->
              <div class="card-header bg-transparent border-0 px-0 pt-0 d-flex justify-content-between align-items-start">
                <h5 class="card-title mb-0">{{ $warga->nama }}</h5>
                <span class="badge {{ $warga->status == 'aktif' ? 'bg-success' : 'bg-warning' }}">
                  {{ ucfirst($warga->status) }}
                </span>
              </div>

              <!-- Content Card -->
              <div class="card-content flex-grow-1">
                <div class="warga-info">
                  <p class="card-text mb-2">
                    <small class="text-muted">
                      <i class="fas fa-id-card me-2"></i><strong>NIK:</strong> {{ $warga->nik }}
                    </small>
                  </p>
                  <p class="card-text mb-2">
                    <small class="text-muted">
                      <i class="fas fa-user me-2"></i><strong>Usia:</strong> {{ $warga->usia }} tahun
                    </small>
                  </p>
                  <p class="card-text mb-2">
                    <small class="text-muted">
                      <i class="fas fa-venus-mars me-2"></i><strong>JK:</strong> 
                      <span class="badge bg-info">{{ $warga->jenis_kelamin }}</span>
                    </small>
                  </p>
                  <p class="card-text mb-2">
                    <small class="text-muted">
                      <i class="fas fa-map-marker-alt me-2"></i><strong>Alamat:</strong><br>
                      <span class="ms-3">{{ Str::limit($warga->alamat, 60) }}</span>
                    </small>
                  </p>
                  <p class="card-text">
                    <small class="text-muted">
                      <i class="fas fa-clinic-medical me-2"></i><strong>Posyandu:</strong><br>
                      @if($warga->posyandu)
                        <span class="badge bg-primary ms-3">{{ $warga->posyandu->nama }}</span>
                      @else
                        <span class="badge bg-secondary ms-3">Belum Terdaftar</span>
                      @endif
                    </small>
                  </p>
                </div>
              </div>

              <!-- Footer Card dengan Action Buttons -->
              <div class="card-footer bg-transparent border-0 px-0 pb-0">
                <div class="d-flex justify-content-between gap-2">
                  <a href="{{ route('warga.show', $warga->id) }}" class="btn btn-info btn-sm flex-fill">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('warga.edit', $warga->id) }}" class="btn btn-warning btn-sm flex-fill">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ route('warga.destroy', $warga->id) }}" method="POST" 
                        onsubmit="return confirm('Yakin ingin menghapus data warga ini?')"
                        class="flex-fill">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm w-100">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Jika tidak ada data -->
      @if($wargas->isEmpty())
        <div class="text-center mt-5">
          <div class="empty-state">
            <i class="fas fa-users fa-3x text-muted mb-3"></i>
            <h5 class="text-muted">Belum ada data warga</h5>
            <p class="text-muted">Tambahkan data warga pertama Anda</p>
            <a href="{{ route('warga.create') }}" class="btn btn-primary mt-2">
              <i class="fas fa-plus me-2"></i>Tambah Warga Pertama
            </a>
          </div>
        </div>
      @endif

      <!-- Pagination -->
      @if($wargas->hasPages())
        <div class="d-flex justify-content-center mt-5">
          {{ $wargas->links() }}
        </div>
      @endif
    </div>
  </section>

  <!-- Users Section -->
  <section id="users" class="users section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Data Pengguna</h2>
      <p>Data semua pengguna yang terdaftar di sistem MEDILAB</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      <!-- Card List Users -->
      <div class="row gy-4">
        @foreach($users as $user)
        <div class="col-lg-4 col-md-6">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <!-- Header Card -->
              <div class="d-flex justify-content-between align-items-start mb-3">
                <h5 class="card-title mb-0">{{ $user->name }}</h5>
                <span class="badge {{ $user->role == 'admin' ? 'bg-danger' : 'bg-primary' }}">
                  {{ $user->role == 'admin' ? 'Admin' : 'User' }}
                </span>
              </div>

              <!-- Info User -->
              <div class="user-info">
                <p class="card-text mb-2">
                  <strong><i class="fas fa-envelope me-2"></i>Email:</strong><br>
                  {{ $user->email }}
                </p>
                <p class="card-text mb-2">
                  <strong><i class="fas fa-calendar me-2"></i>Bergabung:</strong><br>
                  {{ $user->created_at->format('d/m/Y H:i') }}
                </p>
              </div>

              <!-- Badge untuk user yang sedang login -->
              @if($user->id === auth()->id())
                <div class="text-center mt-2">
                  <span class="badge bg-success">
                    <i class="fas fa-user me-1"></i>Akun Anda
                  </span>
                </div>
              @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Jika tidak ada data -->
      @if($users->isEmpty())
        <div class="alert alert-info text-center mt-4">
          <i class="fas fa-users me-2"></i>
          Belum ada data pengguna yang terdaftar.
        </div>
      @endif

    </div>
  </section>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/6281234567890?text=Halo%20MEDILAB,%20saya%20ingin%20bertanya%20tentang%20layanan%20posyandu" 
     class="whatsapp-float" 
     target="_blank"
     data-aos="fade-left" 
     data-aos-delay="500"
     data-aos-anchor="#hero">
      <i class="fab fa-whatsapp"></i>
  </a>
  <div class="whatsapp-tooltip">Hubungi Kami via WhatsApp</div>

</main>
@endsection