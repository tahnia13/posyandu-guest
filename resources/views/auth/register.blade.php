@extends('layouts.app')

@section('title', 'Daftar - POSYANDU SEHAT')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2><i class="fas fa-user-plus"></i> Buat Akun Baru</h2>
            <p>Daftar sekarang untuk mengakses semua layanan posyandu.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('auth.register.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Masukkan nama lengkap">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan email Anda">
                </div>
            </div>

            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Masukkan nomor telepon">
                </div>
            </div>

            <div class="form-group">
                <label for="address">Alamat Lengkap</label>
                <div class="input-group">
                    <i class="fas fa-map-marker-alt"></i>
                    <textarea id="address" name="address" required placeholder="Masukkan alamat lengkap" rows="3">{{ old('address') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" required placeholder="Masukkan password (min. 6 karakter)">
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Ulangi password">
                </div>
            </div>

            <div class="form-options">
                <label class="checkbox">
                    <input type="checkbox" name="terms" required>
                    <span>Saya menyetujui <a href="#" style="color: var(--primary);">syarat dan ketentuan</a></span>
                </label>
            </div>

            <button type="submit" class="auth-button">
                <i class="fas fa-user-plus"></i> Daftar Sekarang
            </button>
        </form>

        <div class="auth-footer">
            <p>Sudah punya akun? <a href="{{ route('login') }}" style="color: var(--primary);">Masuk di sini</a></p>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .auth-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 0;
        background: linear-gradient(135deg, var(--primary-light) 0%, #f8f9fa 100%);
    }

    .auth-card {
        background: var(--white);
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 500px;
        border-top: 5px solid var(--primary);
    }

    .auth-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .auth-header h2 {
        color: var(--dark);
        margin-bottom: 0.5rem;
        font-size: 1.8rem;
    }

    .auth-header p {
        color: var(--gray);
        margin-bottom: 0;
    }

    .auth-header i {
        color: var(--primary);
        margin-right: 10px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: var(--dark);
        font-weight: 500;
        font-size: 0.95rem;
    }

    .input-group {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-group i {
        position: absolute;
        left: 15px;
        color: var(--gray);
        z-index: 2;
    }

    .input-group input {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s;
        background: var(--white);
        font-family: inherit;
    }

    .input-group textarea {
        width: 100%;
        padding: 12px 15px 12px 45px;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s;
        background: var(--white);
        resize: vertical;
        min-height: 80px;
        font-family: inherit;
        line-height: 1.5;
    }

    .input-group input:focus,
    .input-group textarea:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(44, 127, 184, 0.1);
        outline: none;
    }

    .input-group input::placeholder,
    .input-group textarea::placeholder {
        color: #a0aec0;
        font-size: 0.9rem;
    }

    .form-options {
        margin-bottom: 1.5rem;
    }

    .checkbox {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        cursor: pointer;
        color: var(--gray);
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .checkbox input {
        margin-top: 2px;
        flex-shrink: 0;
    }

    .checkbox a {
        color: var(--primary);
        text-decoration: none;
    }

    .checkbox a:hover {
        text-decoration: underline;
    }

    .auth-button {
        width: 100%;
        background: var(--primary);
        color: var(--white);
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        margin-bottom: 1.5rem;
        font-family: inherit;
    }

    .auth-button:hover {
        background: #236a9e;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(44, 127, 184, 0.3);
    }

    .auth-button i {
        margin-right: 8px;
    }

    .auth-footer {
        text-align: center;
        color: var(--gray);
        font-size: 0.95rem;
    }

    .auth-footer a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
    }

    .auth-footer a:hover {
        text-decoration: underline;
    }

    .alert {
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        font-size: 0.9rem;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .alert-error {
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    .alert-error ul {
        margin: 0;
        padding-left: 1rem;
    }

    .alert-error li {
        margin-bottom: 0.25rem;
    }

    .alert-error li:last-child {
        margin-bottom: 0;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .auth-card {
            padding: 2rem;
            margin: 1rem;
        }

        .auth-header h2 {
            font-size: 1.5rem;
        }

        .input-group input,
        .input-group textarea {
            padding: 10px 12px 10px 40px;
            font-size: 0.95rem;
        }

        .input-group i {
            left: 12px;
            font-size: 0.9rem;
        }
    }
</style>
@endpush