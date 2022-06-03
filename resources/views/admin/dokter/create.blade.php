@extends('layouts.admin.master')
@section('statussidepanel3', 'active')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form method="POST" action="{{ route('dokter.store') }}" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Data Dokter</h6>
                <div class="form-floating mb-3">
                    <input name="username" type="username" class="form-control" id="floatingInput" placeholder="johndoe">
                    <label for="floatingInput">Nama Dokter</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Jam Datang</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Jam Pulang</label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a href="{{route('dokter.index')}}" class="btn btn-dark m-2"><i class="fa fa-angle-left me-2"></i>Kembali</a>
            <button type="submit" class="btn btn-success m-2"><i class="fa fa-plus me-2"></i>Submit</button>
        </div>
    </form>
</div>
@endsection