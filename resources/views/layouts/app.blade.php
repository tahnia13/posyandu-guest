<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDILAB - Posyandu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Include CSS Partial -->
    @include('layouts.css')
    
    <!-- Include Home-specific CSS hanya di halaman beranda -->
    @if(request()->is('/'))
        @include('layouts.home-css')
    @endif
</head>

<body>
    @include('layouts.header')

    <main id="main">
        @yield('content')
    </main>

    @include('layouts.footer')
    @include('layouts.js')
</body>
</html>