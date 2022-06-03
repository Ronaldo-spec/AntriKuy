@extends('layouts.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Buat Akun</h1>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Daftar</h5>
                        <h1 class="display-6 mb-4">Semangatin ges!</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <!-- <i class="bi bi-geo-alt fs-1 text-primary me-3"></i> -->
                        <div class="text-start">
                            <!-- <h5 class="mb-0">Our Office</h5> -->
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dignissim varius libero, at ornare justo sodales non. </span>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>+012 345 6789</span>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="row g-3">
                    <div class="col-12">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="Nomor Induk Kependudukan" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <input type="email" class="form-control border-0 bg-light px-4" placeholder="Nama Lengkap" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="Alamat" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control border-0 bg-light px-4" placeholder="Nomor Handphone" style="height: 55px;">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" class="form-control @error('username') is-invalid @enderror border-0 bg-light px-4" placeholder="Username" style="height: 55px;" name="username" required autocomplete="email">
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control @error('email') is-invalid @enderror border-0 bg-light px-4" placeholder="Email" style="height: 55px;" name="email" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror border-0 bg-light px-4" placeholder="Password" style="height: 55px;" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input id="password-confirm" type="password" class="form-control border-0 bg-light px-4" placeholder="Confirm Password" style="height: 55px;" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">{{ __('Daftar') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection