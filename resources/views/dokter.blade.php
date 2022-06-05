@extends('layouts.master')
@section('pagestatus2', 'active')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">DOKTER POLI</h1>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">DOKTER KAMI</h5>
                    <h1 class="display-6 mb-4">KENALI DOKTER KAMI YANG RAMAH & AHLI</h1>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('img/harold.jpg') }}" ) alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">dr. Harold Kertanegara</h4>
                        <p class="text-primary mb-0">POLI UMUM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('img/strange.jpg') }}" ) alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">dr. Mochammad Strange</h4>
                        <p class="text-primary mb-0">POLI UMUM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('img/boyke.jpg') }}" ) alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">dr. Boyke Dian Wijaya, Sp.PD.</h4>
                        <p class="text-primary mb-0">POLI PENYAKIT DALAM</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('img/mike.jpg') }}" ) alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">drg. Johannes Mike Ridwan</h4>
                        <p class="text-primary mb-0">POLI GIGI</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="{{ asset('img/johny.jpg') }}" ) alt="">
                        <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">dr. Johnny Sins, Sp.THT.</h4>
                        <p class="text-primary mb-0">THT</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection