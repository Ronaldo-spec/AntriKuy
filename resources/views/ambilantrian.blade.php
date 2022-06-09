@extends('layouts.master')
@section('pagestatus3', 'active')
@section('content')
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Ambil Nomor Antrian</h1>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">ANTRIAN ONLINE</h1>
                    <p class="text-white mb-0">Kami menyediakan sistem antrian secara online sehingga para pasien tidak perlu datang langsung ke tempat dan menunggu terlalu lama. Dengan adanya sistem antrian online ini kami harapkan para pasien nyaman dan puas terhadapat layanan kami.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Pendaftaran Loket Antrian</h1>
                    <form method="POST" action="{{ route('antrian.create') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input id="nik" type="text" class="form-control bg-light border-0" placeholder="NIK Anda" style="height: 55px;" name="nik" value="{{$user->pasien->nik}}" required disabled>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="jenis_kelamin" type="text" class="form-control bg-light border-0" placeholder="Jenis Kelamin" style="height: 55px;" name="jenis_kelamin" value="{{$user->pasien->jenis_kelamin}}" required disabled>

                                <!-- <select id="jenis_kelamin" class="form-select bg-light border-0" style="height: 55px;" name="jenis_kelamin" required disabled>
                                    <option value="Laki-Laki" @if($user->pasien->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                    <option value="Perempuan" @if($user->pasien->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select> -->
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="nama" type="text" class="form-control bg-light border-0" placeholder="Nama Anda" style="height: 55px;" name="nama_lengkap" value="{{$user->pasien->nama_lengkap}}" required disabled>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="no_hp" type="text" class="form-control bg-light border-0" placeholder="Nomor Anda" style="height: 55px;" name="no_hp" value="{{$user->pasien->no_hp}}" required disabled>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="kelas" type="text" class="form-control bg-light border-0" placeholder="Nomor Anda" style="height: 55px;" name="kelas" value="{{$user->pasien->kelas}}" required disabled>
                            </div>
                            @if($user->pasien->kelas=='bpjs')
                            <div class="col-12 col-sm-6">
                                <input id="tingkat_faskes" type="text" class="form-control bg-light border-0" placeholder="Nomor Anda" style="height: 55px;" name="tingkat_faskes" value="{{$user->pasien->tingkat_faskes}}" required disabled>
                            </div>
                            @endif
                            <small class="text-dark bold">* Silahkan ke profil, lalu ubah data untuk mengubah data diri anda</small>
                            <!-- <div class="col-12 col-sm-6">
                                <select id="kelas" class="form-select bg-light border-0" style="height: 55px;" name="kelas" value="{{$user->pasien->kelas}}" required>
                                    <option>Pilih Kelas</option>
                                    <option value="regular" @if($user->pasien->kelas == 'regular') selected @endif>Regular</option>
                                    <option value="bpjs" @if($user->pasien->kelas == 'bpjs') selected @endif>BPJS</option>
                                </select>
                            </div> -->
                            @if($antrian)
                            <div class="col-12">
                                <select id="poli" class="form-select bg-light border-0" style="height: 55px;" name="poli" required disabled>
                                    <option>Poli Tujuan</option>
                                    @foreach($poli as $pol)
                                    <option value="{{$pol->id}}">{{$pol->nama_poli}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <h3 class="text-black mb-4">Anda sudah mengantri</h3>
                            </div>
                            @else
                            <div class="col-12">
                                <select id="poli" class="form-select bg-light border-0" style="height: 55px;" name="poli" required>
                                    <option>Poli Tujuan</option>
                                    @foreach($poli as $pol)
                                    <option value="{{$pol->id}}">{{$pol->nama_poli}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Daftar</button>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
@endsection