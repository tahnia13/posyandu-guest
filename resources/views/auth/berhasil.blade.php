<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Berhasil - Sistem Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .success-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 90%;
            animation: fadeIn 0.5s ease-in;
        }
        .success-icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: bounce 1s infinite alternate;
        }
        .success-title {
            color: #28a745;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .success-message {
            color: #6c757d;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .user-info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid #4CAF50;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background: #4CAF50;
            color: white;
        }
        .btn-primary:hover {
            background: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
        }
        .btn-outline {
            background: transparent;
            color: #4CAF50;
            border: 2px solid #4CAF50;
        }
        .btn-outline:hover {
            background: #4CAF50;
            color: white;
            transform: translateY(-2px);
        }
        .countdown {
            color: #6c757d;
            font-size: 14px;
            margin-top: 20px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-10px); }
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        .feature-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .feature-icon {
            font-size: 24px;
            margin-bottom: 8px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="success-card">
        <div class="success-icon">🎉</div>
        
        <h1 class="success-title">Login Berhasil!</h1>
        
        <div class="user-info">
            <strong>👋 Selamat datang, {{ session('user.username') ?? 'Admin' }}!</strong>
            <p class="mb-0 mt-2">Anda berhasil login ke Sistem Manajemen Posyandu</p>
        </div>

        <div class="success-message">
            Anda sekarang dapat mengelola data posyandu, melihat laporan, dan memanajemen informasi kesehatan masyarakat.
        </div>

        <!-- Features Grid -->
        <div class="features">
            <div class="feature-item">
                <span class="feature-icon">📊</span>
                <div>Kelola Data</div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">👥</span>
                <div>Manajemen Posyandu</div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">📈</span>
                <div>Lihat Laporan</div>
            </div>
            <div class="feature-item">
                <span class="feature-icon">⚙️</span>
                <div>Pengaturan</div>
            </div>
        </div>

        <div class="btn-group">
            <a href="{{ route('posyandu.index') }}" class="btn btn-primary">
                🏠 Dashboard Admin
            </a>
            <a href="{{ route('guest.posyandu.index') }}" class="btn btn-outline">
                👀 Lihat Halaman Publik
            </a>
        </div>

        <div class="countdown" id="countdown">
            Redirect otomatis ke Dashboard dalam <span id="timer">5</span> detik...
        </div>

        <!-- Manual Logout -->
        <div class="mt-4">
            <form action="{{ route('auth.logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline" style="background: transparent; color: #dc3545; border: 2px solid #dc3545;">
                    🚪 Logout
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Countdown timer untuk redirect otomatis
        let countdown = 5;
        const timerElement = document.getElementById('timer');
        const countdownElement = document.getElementById('countdown');

        const countdownInterval = setInterval(function() {
            countdown--;
            timerElement.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = "{{ route('posyandu.index') }}";
            }
        }, 1000);

        // Batalkan redirect jika user berinteraksi
        let userInteracted = false;

        document.addEventListener('click', function() {
            if (!userInteracted) {
                userInteracted = true;
                clearInterval(countdownInterval);
                countdownElement.innerHTML = 'Redirect dibatalkan. Silakan klik tombol di atas untuk navigasi manual.';
                countdownElement.style.color = '#6c757d';
            }
        });

        document.addEventListener('keydown', function() {
            if (!userInteracted) {
                userInteracted = true;
                clearInterval(countdownInterval);
                countdownElement.innerHTML = 'Redirect dibatalkan. Silakan klik tombol di atas untuk navigasi manual.';
                countdownElement.style.color = '#6c757d';
            }
        });

        // Auto redirect setelah 5 detik jika tidak ada interaksi
        setTimeout(function() {
            if (!userInteracted) {
                window.location.href = "{{ route('posyandu.index') }}";
            }
        }, 5000);
    </script>
</body>
</html>