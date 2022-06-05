<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSSA - Halaman Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/img/favicon.ico')}}" rel=" icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/admin/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/admin/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/admin/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hospital me-2"></i></i>RSTM</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('img/user.jpg')}}" alt="" style=" width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->username }}</h6>
                        <span>{{ Auth::user()->role }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin.index')}}" class="nav-item nav-link @yield('statussidepanel1')"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{route('users.index')}}" class="nav-item nav-link @yield('statussidepanel2')"><i class="fa fa-user me-2"></i>Manage Users</a>
                    <a href="{{route('dokter.index')}}" class="nav-item nav-link @yield('statussidepanel3')"><i class="fa fa-user-doctor me-2"></i>Data Dokter</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @yield('statussidepanel4')" data-bs-toggle="dropdown"><i class="fa fa-hospital-user me-2"></i>List Pasien</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="pasien.html" class="dropdown-item">Belum Mengantri</a>
                            <a href="pasien.html" class="dropdown-item">Sudah Mengantri</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link @yield('statussidepanel5')"><i class="fa fa-clipboard-list me-2"></i>Antrian</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="d-none d-md-flex ms-4">
                    <a href="{{ route('home') }}">Home</a>
                </div>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->username }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            @yield('content')
            <!-- Footer Start -->
            <br>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Rs Tadika Mesra</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/admin/chart/chart.min.js')}}"></script>
    <script src="{{ asset('lib/admin/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/admin/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/admin/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/admin/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('lib/admin/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('lib/admin/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/admin/main.js')}}"></script>
    @yield('scripttambahan')
</body>

</html>