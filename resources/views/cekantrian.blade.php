@extends('layouts.master')
@section('pagestatus3', 'active')
@section('content')
<!-- Hero Start -->
<!-- <div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">CEK NOMOR ANTRIAN</h1>
        </div>
    </div>
</div> -->
<!-- Hero End -->
<div class="container-fluid bg-offer wow fadeInUp" data-wow-delay="0.4s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class=" bg-info text-center col-lg-3 mb-4 mb-lg-0">
                                <h4 class="mt-3 mb-0">Nomor Antrian</h4>
                                <h1 style="font-size:20vw;">{{$antri->nomor_antrian}}</h1>
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded-3">
                                    <h3 class="h2 text-dark mb-3">{{$antri->pasien->nama_lengkap}}</h3>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">NIK:</span> {{$antri->pasien->nik}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Alamat:</span>{{$antri->pasien->alamat}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Kelas:</span>{{$antri->pasien->kelas}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Poli Tujuan:</span>{{$antri->poli->nama_poli}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Status:</span>{{$antri->status}}</li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection