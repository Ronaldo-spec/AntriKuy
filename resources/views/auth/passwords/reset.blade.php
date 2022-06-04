@extends('layouts.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Atur Ulang Kata Sandi</h1>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded h-100 p-5">
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <input id="username" type="text" class="form-control border-0 bg-light px-4 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Username atau Email" style="height: 55px;" value="{{ $email ?? old('email') }}" name="username" required autocomplete="username" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input id="password" type="password" class="form-control border-0 bg-light px-4 @error('password') is-invalid @enderror" placeholder="Kata Sandi" style="height: 55px;" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <input id="password-confirm" type="password" class="form-control border-0 bg-light px-4" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" style="height: 55px;" required autocomplete="new-password">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Atur ulang Kata Sandi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection