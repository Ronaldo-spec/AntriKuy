@extends('layouts.master')
@section('content')
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Konfirmasi Kata Sandi</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded h-100 p-5">
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input id="password" type="password" class="form-control border-0 bg-light px-4 @error('password') is-invalid @enderror" placeholder="Kata Sandi" style="height: 55px;" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">
                                {{ __('Konfirmasi Kata Sandi') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Kata Sandi?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection