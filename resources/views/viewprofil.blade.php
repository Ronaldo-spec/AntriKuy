@extends('layouts.master')
@section('styletambahan')
<style type="text/css">
    body {
        margin-top: 20px;
        background-color: #f2f6fc;
        color: #69707a;
    }

    .img-account-profile {
        height: 10rem;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
        font-weight: 500;
    }

    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }

    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
</style>
@section('content')
<div class="container-fluid py-5 wow fadeInUp mt-5" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Detail Akun</div>
                        <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="username">Username</label>
                                <h5 class="text-black mb-3" id="nik">{{ $users->username }}</h5>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Alamat Email</label>
                                <h5 class="text-black mb-3" id="nik">{{ $users->email }}</h5>
                            </div>
                            <a class="btn btn-primary" href="{{ route('pasien.editprofil') }}" type="button">Ubah Detail Akun</a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Data Diri Pasien</div>
                        <div class="card-body">
                            <!-- Form Group (username)-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="nik">Nomor Induk Kependudukan</label>
                                        <h5 class="text-black mb-3" id="nik">{{ $user->pasien->nik }}</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="small mb-1" for="alamat">Kelas</label>
                                        <h5 class="text-black mb-3" id="nik">{{ $user->pasien->kelas }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="nama_lengkap">Nama lengkap</label>
                                <h5 class="text-black mb-3" id="nama_lengkap">{{ $user->pasien->nama_lengkap }}</h5>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="alamat">Alamat</label>
                                <h5 class="text-black mb-3" id="nik">{{ $user->pasien->alamat }}</h5>
                            </div>

                            <hr>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="jenis_kelamin">Jenis Kelamin</label>
                                    <h5 class="text-black mb-3" id="nik">{{ $user->pasien->jenis_kelamin }}</h5>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="no_hp">Nomor HP</label>
                                    <h5 class="text-black mb-3" id="nik">{{ $user->pasien->no_hp }}</h5>
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
                                    <h5 class="text-black mb-3" id="nik">{{ $user->pasien->tempat_lahir }}</h5>
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Tanggal Lahir</label>
                                    <h5 class="text-black mb-3" id="nik">{{ $user->pasien->tgl_lahir }}</h5>
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <a class="btn btn-primary" href="{{ route('pasien.editdata') }}" type="button">Ubah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection