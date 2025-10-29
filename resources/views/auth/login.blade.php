@extends('layouts.app')

@section('title', 'Login - POSYANDU SEHAT')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2><i class="fas fa-sign-in-alt"></i> Masuk ke Akun Anda</h2>
            <p>Selamat datang kembali! Silakan masuk ke akun Anda.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
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

        <form method="POST" action="{{ route('auth.login.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan email Anda">
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" required placeholder="Masukkan password Anda">
                </div>
            </div>

            <div class="form-options">
                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    <span>Ingat saya</span>
                </label>
                <a href="#" class="forgot-password">Lupa password?</a>
            </div>

            <button type="submit" class="auth-button">
                <i class="fas fa-sign-in-alt"></i> Masuk
            </button>
        </form>

        <div class="auth-divider">
            <span>Atau</span>
        </div>

        <div class="demo-accounts">
            <h4>Akun Demo:</h4>
            <div class="demo-account">
                <strong>Admin:</strong> admin@posyandu.id / password123
            </div>
            <div class="demo-account">
                <strong>Kader:</strong> kader@posyandu.id / kader123
            </div>
            <div class="demo-account">
                <strong>User:</strong> user@posyandu.id / user123
            </div>
        </div>

        <div class="auth-footer">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
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
        max-width: 450px;
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
    }

    .input-group input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(44, 127, 184, 0.1);
        outline: none;
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .checkbox {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        color: var(--gray);
    }

    .checkbox input {
        margin: 0;
    }

    .forgot-password {
        color: var(--primary);
        text-decoration: none;
        font-size: 0.9rem;
    }

    .forgot-password:hover {
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
    }

    .auth-button:hover {
        background: #236a9e;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(44, 127, 184, 0.3);
    }

    .auth-button i {
        margin-right: 8px;
    }

    .auth-divider {
        text-align: center;
        margin: 1.5rem 0;
        position: relative;
    }

    .auth-divider::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background: #e2e8f0;
    }

    .auth-divider span {
        background: var(--white);
        padding: 0 1rem;
        color: var(--gray);
        font-size: 0.9rem;
    }

    .demo-accounts {
        background: var(--primary-light);
        padding: 1rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
    }

    .demo-accounts h4 {
        margin-bottom: 0.5rem;
        color: var(--dark);
        font-size: 0.9rem;
    }

    .demo-account {
        font-size: 0.8rem;
        color: var(--gray);
        margin-bottom: 0.25rem;
    }

    .demo-account:last-child {
        margin-bottom: 0;
    }

    .auth-footer {
        text-align: center;
        color: var(--gray);
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
</style>
@endpush