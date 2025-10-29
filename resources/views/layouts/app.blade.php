<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'POSYANDU SEHAT - Sistem Informasi Posyandu Terpadu')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c7fb8;
            --primary-light: #e8f4fc;
            --secondary: #00a896;
            --accent: #ff6b6b;
            --dark: #2d3748;
            --light: #f8f9fa;
            --gray: #718096;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .logo i {
            font-size: 2rem;
            color: var(--primary);
        }
        
        .logo h1 {
            font-size: 1.8rem;
            color: var(--primary);
            font-weight: 700;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 20px;
        }
        
        nav ul li a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 20px;
            transition: all 0.3s;
        }
        
        nav ul li a:hover, nav ul li a.active {
            background-color: var(--primary-light);
            color: var(--primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .btn-login {
            background-color: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-login:hover {
            background-color: var(--primary-light);
        }
        
        .btn-register {
            background-color: var(--primary);
            color: var(--white);
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-register:hover {
            background-color: #236a9e;
        }
        
        /* User Menu Styles */
        .user-menu {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .user-greeting {
            color: var(--primary);
            font-weight: 500;
        }
        
        .logout-btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 15px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .logout-btn:hover {
            background: #e55a5a;
            transform: translateY(-1px);
        }
        
        .user-dropdown {
            position: relative;
        }
        
        /* Main Content */
        main {
            flex: 1;
            padding: 2rem 0;
        }

        /* Service Card Styles */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .service-card {
            background: var(--white);
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .service-card.popular {
            border: 2px solid var(--primary);
            transform: scale(1.02);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
            text-align: center;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 1rem;
            text-align: center;
        }

        .service-description {
            color: var(--gray);
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .service-features li {
            padding: 0.5rem 0;
            border-bottom: 1px solid var(--primary-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-features li:last-child {
            border-bottom: none;
        }

        .service-features i {
            color: var(--secondary);
        }

        .service-button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .service-button:hover {
            background: #236a9e;
            transform: translateY(-2px);
        }

        .popular-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .page-header p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Alert Styles */
        .alert {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            border-left: 4px solid;
        }

        .alert-error {
            background: #fed7d7;
            border-color: #e53e3e;
            color: #742a2a;
        }

        .alert-success {
            background: #c6f6d5;
            border-color: #38a169;
            color: #22543d;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 3rem 0 1rem;
            margin-top: auto;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            margin-bottom: 1rem;
            color: var(--white);
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section ul li a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-section ul li a:hover {
            color: var(--white);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #4a5568;
            color: #cbd5e0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .auth-buttons {
                justify-content: center;
            }
            
            .user-menu {
                flex-direction: column;
                gap: 5px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .service-card {
                padding: 1.5rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-top">
                <a href="{{ route('home') }}" class="logo">
                    <i class="fas fa-heartbeat"></i>
                    <h1>POSYANDU<span>SEHAT</span></h1>
                </a>
                
                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                        <li><a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan*') ? 'active' : '' }}">Layanan</a></li>
                        <li><a href="{{ route('posyandu') }}" class="{{ request()->routeIs('posyandu') ? 'active' : '' }}">Posyandu</a></li>
                        <li><a href="{{ route('artikel') }}" class="{{ request()->routeIs('artikel*') ? 'active' : '' }}">Artikel</a></li>
                        <li><a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a></li>
                    </ul>
                </nav>
                
                <div class="auth-buttons">
                    @if(session('logged_in'))
                        <div class="user-menu">
                            <span class="user-greeting">Halo, {{ session('user')['name'] }}</span>
                            <div class="user-dropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="logout-btn">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">Masuk</a>
                        <a href="{{ route('register') }}" class="btn-register">Daftar</a>
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <!-- Alert Messages -->
            @if(session('error'))
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>POSYANDU SEHAT</h3>
                    <p>Sistem Informasi Posyandu Terpadu untuk mendukung kesehatan ibu dan anak melalui pelayanan yang terintegrasi dan modern.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <ul>
                        <li><a href="{{ route('layanan') }}">Pemeriksaan Bayi</a></li>
                        <li><a href="{{ route('layanan') }}">Kesehatan Ibu</a></li>
                        <li><a href="{{ route('layanan') }}">Imunisasi</a></li>
                        <li><a href="{{ route('layanan') }}">Pemantauan Gizi</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Link Cepat</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('posyandu') }}">Daftar Posyandu</a></li>
                        <li><a href="{{ route('artikel') }}">Artikel Kesehatan</a></li>
                        <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i> (022) 1234-5678</li>
                        <li><i class="fas fa-envelope"></i> info@posyandusehat.id</li>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Merdeka No. 123, Bandung</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 POSYANDU SEHAT. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>