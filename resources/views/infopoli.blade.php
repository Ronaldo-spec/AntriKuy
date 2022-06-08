@extends('layouts.master')
@include('sweetalert::alert')
@section('pagestatus1', 'active')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">POLI UMUM</h1>
        </div>
    </div>
</div>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s"">
    <div class="container">
        <div class="row g-5">
            
            <div class="col-lg-29">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">POLI UMUM</h5>
                    <h1 class="display-5 mb-10">PEMERIKSAAN KESEHATAN UMUM</h1>
                </div>
                <p class="mb-4">Poli Umum mmberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.
                    Poli Umum Rumah Sakit San Andreas memberi pelayanan kepada pasien untuk konsultasi dan/atau pemeriksan fisik oleh dokter umum dan pemeriksaan atau tindakan medis tertentu oleh dokter umum.
                    Pelayanan Poli Umum meliputi Konsultasi, penyuluhan, dan pemeriksaan kesehatan fisik secara umum (General Check-Up) Pelayanan kesehatan yang bersifat umum seperti batuk, flu, demam, sakit perut, sembelit, pusing, dan lain-lain.
                </p>
                <div class="row g-3 text-center">
                    <div class= "col-sm-6 wow zoomIn" data-wow-delay="0.3s">
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
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Poli Umum</h5>
                    <h1 class="display-5 mb-0">dr. Harold Kertanegeara</h1>
                </div>
                <p class="mb-4"> Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Tirta kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Tirta Mandira Hudhi dibesarkan di Karanganyar, Solo, Jawa Tengah.</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/harold.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/strange.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Poli Umum</h5>
                    <h1 class="display-5 mb-0">dr. Mochammad Strange</h1>
                </div>
                <p class="mb-4"> Merupakan lulusan Fakultas Kedokteran Universitas Gadjah Mada. Dr. Tirta kuliah di Fakultas Kedokteran sejak tahun 2009 dan lulus pada tahun 2013 lalu. Tirta Mandira Hudhi dibesarkan di Karanganyar, Solo, Jawa Tengah.</p>
            </div>
        </div>
    </div>
</div>
<!-- 
    <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/poli_umum.jpg" style="object-fit: cover;">
                </div>
            </div>
    
    About End -->
@endsection