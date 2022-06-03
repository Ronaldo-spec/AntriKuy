    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-stethoscope me-2"></i>AntriKuy</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('home')}}" class="nav-item nav-link @yield('pagestatus1')">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @yield('pagestatus2')" data-bs-toggle="dropdown">Poli</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('poli')}}" class="dropdown-item">Poli</a>
                        <a href="{{route('dokter')}}" class="dropdown-item">Dokter Poli</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle @yield('pagestatus3')" data-bs-toggle="dropdown">Loket</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('ambilantrian')}}" class="dropdown-item">Ambil Nomor Antrian</a>
                        <a href="{{route('lihatantrian')}}" class="dropdown-item">Lihat Antrian</a>
                        <a href="{{route('cekantrian')}}" class="dropdown-item">Cek Nomor Antrian</a>
                    </div>
                </div>
                @auth
                @if (Auth::user()->role == 'admin')
                <a href="{{route('admin')}}" class="nav-item nav-link @yield('pagestatus4')">Admin</a>
                @endif
                @endauth
            </div>
            @guest
            @if (Route::has('login'))
            <a href="{{route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Masuk</a>
            @endif

            @if (Route::has('register'))
            <a href="{{route('register')}}" class="btn btn-secondary py-2 px-4 ms-3">Daftar</a>
            @endif
            @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->username }}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{route('ambilantrian')}}" class="dropdown-item">Edit Profil</a>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endguest
        </div>
    </nav>
    <!-- Navbar End -->