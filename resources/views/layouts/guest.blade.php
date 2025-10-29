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
        }