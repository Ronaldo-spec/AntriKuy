@extends('layouts.admin.master')
@section('statussidepanel2', 'active')
@section('content')
<div class="container-fluid pt-4 px-4">
    <form method="POST" action="{{ route('users.store') }}" id="myForm" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Data User</h6>
                <div class="form-floating mb-3">
                    <input name="username" type="username" class="form-control" id="floatingInput" placeholder="johndoe">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Alamat Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <select name="role" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option>Pilih role user</option>
                        <option value="admin">Admin</option>
                        <option value="pasien">Pasien</option>
                    </select>
                    <label for="floatingSelect">Role</label>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a href="{{route('users.index')}}" class="btn btn-dark m-2"><i class="fa fa-angle-left me-2"></i>Kembali</a>
            <button type="submit" class="btn btn-success m-2"><i class="fa fa-plus me-2"></i>Submit</button>
        </div>
    </form>
</div>
@endsection