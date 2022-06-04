@extends('layouts.master')
@section('pagestatus2', 'active')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">DAFTAR POLI</h1>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="section-title mb-5">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Pelayanan Kami</h5>
                <h1 class="display-5 mb-0">KAMI MEMBERIKAN PELAYANAN TERBAIK</h1>
            </div>
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/poli_umum.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">POLI UMUM</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/penyakit_dalam.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">POLI PENYAKIT DALAM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                    <h3 class="text-white mb-3">PELAYANAN</h3>
                    <p class="text-white mb-3">KAMI MEMILIKI DOKTER YANG BERINTEGRITAS DAN STAFF YANG PIAWAI</p>
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">POLI GIGI</h5>
                        </div>
                    </div>
                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/tht.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0">THT</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                    <h3 class="text-white mb-3">FASILITAS</h3>
                    <p class="text-white mb-3">KAMI MENGGUNAKAN FASILITAS YANG MODERN DAN HIGIENIS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection