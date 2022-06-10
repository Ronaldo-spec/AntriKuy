@extends('layouts.admin.master')
@section('statussidepanel1', 'active')
@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Pasien</p>
                    <h6 class="mb-0">{{$totalpasien}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-hospital-user fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Antrian</p>
                    <h6 class="mb-0">{{$totalantrian}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
    <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-hospital-user fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Poli THT</p>
                    <h6 class="mb-0">{{$totalantrian}}</h6>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- Widgets Start -->
<!-- <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calender</h6>
                    <a href="">Show All</a>
                </div>
                <div id="calender"></div>
            </div>
        </div>
    </div>
</div> -->
<!-- Widgets End -->
@endsection