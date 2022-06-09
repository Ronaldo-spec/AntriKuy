@extends('layouts.master')
@section('pagestatus3', 'active')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">List Antrian</h1>
        </div>
    </div>
</div>
<!-- Hero End -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 30px;">
    <div class="container">
        <div class="row g-5">
            @if(!$antrian->isEmpty())
            <div class="table-responsive">
                <table class="table rounded-3 text-white bg-appointment mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nomor Antrian</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Poli</th>
                            <th scope="col">Status</th>
                            <th scope="col">Antrian saat ini</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($antrian as $antri)
                        @if($antri->status == 'proses')
                        <tr class="bg-info">
                            <td>{{$antri->nomor_antrian}}</td>
                            <td>{{$antri->pasien->nama_lengkap}}</td>
                            <td>{{$antri->pasien->kelas}}</td>
                            <td>{{$antri->poli->nama_poli}}</td>
                            <td>{{$antri->status}}</td>
                            <td><i class="fa fa-certificate"></i></td>
                        </tr>
                        @else
                        <tr>
                            <td>{{$antri->nomor_antrian}}</td>
                            <td>{{$antri->pasien->nama_lengkap}}</td>
                            <td>{{$antri->pasien->kelas}}</td>
                            <td>{{$antri->poli->nama_poli}}</td>
                            <td>{{$antri->status}}</td>
                            <td></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h1 class="display-5 mb-0 text-center">Belum Ada Antrian!</h1>
            @endif
        </div>
    </div>
</div>
@endsection