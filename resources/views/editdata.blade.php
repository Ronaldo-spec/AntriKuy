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
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <nav class="nav nav-borders">
                <a class="nav-link" href="{{route('pasien.editprofil')}}">Profile</a>
                <a class="nav-link active ms-0" href="{{route('pasien.editdata')}}">Data</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Data Diri Pasien</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pasien.updatedata') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="nik">Nomor Induk Kependudukan</label>
                                    <input class="form-control" id="nik" name="nik" type="text" placeholder="NIK" value="{{ $users->nik }}">
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="nama_lengkap">Nama lengkap</label>
                                    <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="Nama Lengkap" value="{{ $users->nama_lengkap }}">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jenis_kelamin">Jenis Kelamin</label>
                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                                            <option value="Laki-Laki" @if($users->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($users->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                        <!-- <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie"> -->
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="no_hp">Nomor HP</label>
                                        <input class="form-control" id="no_hp" name="no_hp" type="text" placeholder="Masukkan nomor HP" value="08xx">
                                    </div>
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
                                        <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Tempat Lahir" value="{{ $users->tempat_lahir }}">
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Tanggal Lahir</label>
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" placeholder="Tanggal Lahir" data-target="#date1" data-toggle="datetimepicker">
                                        </div>
                                        <!-- <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA"> -->
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="alamat">Alamat</label>
                                    <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Masukkan Alamat Anda" value="{{ $users->alamat }}">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Password</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection