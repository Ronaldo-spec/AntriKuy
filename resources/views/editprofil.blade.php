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
                <div class="col-md-2">
                    <!-- Profile picture card-->
                    <!-- <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Upload Foto Profil</div>
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <div class="image-area mt-4">
                                    <img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="upload" class="btn btn-light m-0 rounded-pill px-4">Pilih gambar</label>
                                <input name="gambar" id="upload" type="file" onchange="readURL(this);" style="display: none;" class="form-control border-0">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Detail Akun</div>
                        <div class="card-body">
                            @include('sweetalert::alert')
                            <form method="POST" action="{{ route('pasien.updateprofil') }}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="username">Username</label>
                                    <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" placeholder="Masukkan username Anda" value="{{ $users->username }}">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Masukkan email Anda" value="{{$users->email}}" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Masukkan password Anda untuk edit akun" autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a class="btn btn-secondary" href="{{route('pasien.viewprofil')}}">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripttambahan')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
    });
    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');
    input.addEventListener('change', showFileName);

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }
</script>
@endsection