@extends('layouts.master')
@include('sweetalert::alert')
@section('pagestatus1', 'active')
@section('content')
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Rumah Sakit San Andreas</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Melayani Sepenuh Hati, Melayani Dengan Cinta</h1>
                        @guest
                        <a href="{{route('login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Buruan Daftar</a>
                        @endguest
                        @auth
                        <a href="{{route('ambilantrian')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Antri Sekarang</a>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Rumah Sakit San Andreas</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Kami Perhatian, Kami Menyayangi</h1>
                        @guest
                        <a href="{{route('login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Buruan Daftar</a>
                        @endguest
                        @auth
                        <a href="{{route('ambilantrian')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Antri Sekarang</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Banner Start -->
<div class="container-fluid banner mb-5">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Jam Buka</h3>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Senin - Kamis</h6>
                        <p class="mb-0"> 07:30 - 12:00</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Jumat</h6>
                        <p class="mb-0"> 07:30 - 11:00</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Sabtu</h6>
                        <p class="mb-0"> 08:00 - 10:00</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Minggu & Tanggal Merah</h6>
                        <p class="mb-0">LIBUR</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Cari Poli</h3>
                    <div class="date mb-3" id="date" data-target-input="nearest">
                        <input type="text" class="form-control bg-light border-0" placeholder="Masukkan nama poli" style="height: 40px;">
                    </div>
                    <a class="btn btn-light" href="">Cari Poli</a>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">VAKSIN</h3>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Sinovac</h6>
                        <p class="mb-0">RABU</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Pfizer</h6>
                        <p class="mb-0">KAMIS</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">AstraZanecca</h6>
                        <p class="mb-0">JUMAT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Start -->
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">TENTANG KAMI</h5>
                    <h1 class="display-5 mb-0">Rumah Sakit Terbaik & Ternyaman Yang Bisa Anda Rasakan</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">Rumah Sakit San Andreas</h4>
                <p class="mb-4">Berawal dari keinginan untuk memberikan kesadaran akan pentingnya kebersihan dan kesehtan kepada masyarakat, dr. Carl Johnson membuka klinik kesehatan untuk warga sekitar. Klinik ini kemudian semakin berkembang hinggan menjadi Rumah Sakit San Andreas.</p>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Berprestasi</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Bersertifikat</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Dokter Ahli & Professional</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24 Jam</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Umum & BPJS</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>UGD & IGD</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection