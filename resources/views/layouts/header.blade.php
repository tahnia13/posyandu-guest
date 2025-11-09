<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2 class="mb-0">MEDILAB</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}#hero">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#services">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#posyandu">Posyandu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#warga">Warga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#users">Users</a>
                </li>
                
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user me-1"></i>{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('users.profile') }}">
                                <i class="fas fa-user-circle me-2"></i>Profil Saya
                            </a>
                        </li>
                        <!-- HAPUS MENU DATA USER -->
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fas fa-sign-in-alt me-1"></i>Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fas fa-user-plus me-1"></i>Register
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>