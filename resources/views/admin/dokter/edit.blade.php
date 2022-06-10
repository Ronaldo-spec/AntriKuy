@extends('layouts.admin.master')
@section('statussidepanel3', 'active')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form method="POST" action="{{ route('dokter.update', $dokter->id) }}" id="myForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Data Dokter</h6>
                <div class="form-floating mb-3">
                    <input name="nama_dokter" type="nama_dokter" class="form-control" id="floatingInput" value="{{ $dokter->nama_dokter }}">
                    <label for="nama_dokter">Nama Dokter</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="bio" type="text" class="form-control" id="floatingInput" value="{{ $dokter->bio }}">
                    <label for="bio">Bio</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="spesialis" type="text" class="form-control" id="floatingInput" value="{{ $dokter->spesialis }}">
                    <label for="spesialis">Spesialis</label>
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