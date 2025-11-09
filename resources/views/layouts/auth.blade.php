<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDILAB - Sistem Posyandu</title>
    
    <!-- Favicons -->
    <link href="{{ asset('asset-guest/img/favicon.png') }}" rel="icon">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset-guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-guest/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .card {
            border-radius: 15px;
            border: none;
        }
        
        .card-header {
            border-radius: 15px 15px 0 0 !important;
        }
        
        .btn {
            border-radius: 8px;
            font-weight: 500;
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 0.75rem 1rem;
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        
        .input-group-text {
            border-radius: 8px 0 0 8px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset-guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>