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
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
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
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
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
                        <h6 class="text-white mb-0">Mon - Fri</h6>
                        <p class="mb-0"> 8:00am - 9:00pm</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Saturday</h6>
                        <p class="mb-0"> 8:00am - 7:00pm</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Sunday</h6>
                        <p class="mb-0"> 8:00am - 5:00pm</p>
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
                    <h3 class="text-white mb-3">Apanih</h3>
                    <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Start -->
@endsection