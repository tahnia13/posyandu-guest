<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - {{ $title ?? 'Sistem Layanan' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .popular-card {
            border: 2px solid #007bff;
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
        }
        .service-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .service-icon {
            font-size: 3rem;
            color: #007bff;
            margin-bottom: 1rem;
        }
        .popular-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff6b6b;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-hospital"></i> Sistem Layanan Kesehatan
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold text-primary">
                    <i class="fas fa-concierge-bell"></i> Layanan Kami
                </h1>
                <p class="lead">Berbagai layanan kesehatan profesional untuk kebutuhan Anda</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach($layanan as $index => $item)
            <div class="col-md-4 col-lg-4">
                <div class="card service-card h-100 {{ $item['is_popular'] ? 'popular-card' : '' }} position-relative">
                    @if($item['is_popular'])
                    <span class="popular-badge">
                        <i class="fas fa-star"></i> Popular
                    </span>
                    @endif
                    
                    <div class="card-body text-center p-4">
                        <div class="service-icon">
                            <i class="{{ $item['icon'] }}"></i>
                        </div>
                        <h3 class="card-title fw-bold text-dark">{{ $item['title'] }}</h3>
                        <p class="card-text text-muted">{{ $item['description'] }}</p>
                        
                        <div class="mt-3">
                            @if($item['is_popular'])
                            <button class="btn btn-primary btn-lg">
                                <i class="fas fa-calendar-check"></i> Book Now
                            </button>
                            @else
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-info-circle"></i> Detail
                            </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="card bg-light">
                    <div class="card-body">
                        <h4 class="text-dark">Butuh Layanan Lainnya?</h4>
                        <p class="text-muted">Hubungi kami untuk informasi lebih lanjut</p>
                        <button class="btn btn-success">
                            <i class="fas fa-phone"></i> Kontak Kami
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container text-center">
            <p class="mb-0">
                <strong>LABANVEL 12.32.5 | PHP 8.4.12 | LARAVEL</strong> 
                &copy; {{ date('Y') }} Sistem Layanan Kesehatan
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        console.log('Guest Layanan Page Loaded');
    </script>
</body>
</html>