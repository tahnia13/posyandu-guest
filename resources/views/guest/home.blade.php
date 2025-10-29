<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSYANDU SEHAT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #2c7fb8 0%, #00a896 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        
        .container {
            max-width: 800px;
            padding: 2rem;
        }
        
        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background: white;
            color: #2c7fb8;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-heartbeat"></i> POSYANDU SEHAT</h1>
        <p>Sistem Informasi Posyandu Terpadu</p>
        <p>Halaman berhasil diakses! Controller berfungsi dengan baik.</p>
        
        <div style="margin-top: 2rem;">
            <a href="/" class="btn">Beranda</a>
            <a href="/layanan" class="btn">Layanan</a>
            <a href="/artikel" class="btn">Artikel</a>
        </div>
        
        <div style="margin-top: 3rem; background: rgba(255,255,255,0.1); padding: 2rem; border-radius: 15px;">
            <h3>Data dari Controller:</h3>
            <p>Total Posyandu: {{ $stats['total_posyandu'] }}</p>
            <p>Total Layanan: {{ count($layanan) }}</p>
            <p>Total Artikel: {{ count($artikel) }}</p>
        </div>
    </div>
</body>
</html>