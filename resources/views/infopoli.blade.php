@extends('layouts.master')
@include('sweetalert::alert')
@section('pagestatus1', 'active')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">{{$poli->nama_poli}}</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"">
    <div class=" container">
    <div class="row g-5">

        <div class="col-lg-29">
            <div class="section-title mb-4">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Hasil Pencarian Poli</h5>
                <h1 class="display-5 mb-10">{{$poli->nama_poli}}</h1>
            </div>
            <p class="mb-4">{{$poli->deskripsi}}</p>
            <div class="row g-3 text-center">
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Rawat Jalan</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Gawat Darurat</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Rawat Inap</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Obstetri Neonatal Komprehensif (PONEK)</h5>
                </div>
                <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Intensif Care Unit</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Operasi</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Radiologi</h5>
                    <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Laboratorium</h5>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">{{$poli->nama_poli}}</h5>
                    <h1 class="display-5 mb-0">{{$poli->dokter->nama_dokter}}</h1>
                </div>
                <p class="mb-4">{{$poli->dokter->bio}}</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset($poli->dokter->foto)}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection