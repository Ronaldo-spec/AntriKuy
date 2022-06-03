@extends('layouts.master')
@section('content')
<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                <div class="offer-text text-center rounded p-5">
                    <h1 class="display-5 text-white">{{ __('Verifikasi Alamat Email Anda') }}</h1>
                    @if (session('resent'))
                    <div class="alert alert-success text-dark mb-4" role="alert">
                        {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                    </div>
                    @endif
                    <p class="text-white mb-4">
                        {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                        {{ __('Jika Anda tidak menerima email') }},
                    </p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-dark py-3 px-5 me-3">{{ __('Klik di sini untuk meminta link verifikasi baru') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->
@endsection