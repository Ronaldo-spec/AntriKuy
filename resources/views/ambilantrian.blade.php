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
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input id="nik" type="text" class="form-control bg-light border-0" placeholder="NIK Anda" style="height: 55px;" name="nik" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select id="jenis_kelamin" class="form-select bg-light border-0" style="height: 55px;" name="jenis_kelamin" required>
                                    <option>Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="nama" type="text" class="form-control bg-light border-0" placeholder="Nama Anda" style="height: 55px;" name="nama" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select id="poli" class="form-select bg-light border-0" style="height: 55px;" name="poli" required>
                                    <option>Poli Tujuan</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input id="alamat" type="text" class="form-control bg-light border-0" placeholder="Alamat Anda" style="height: 55px;" name="alamat" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select id="kelas" class="form-select bg-light border-0" style="height: 55px;" name="kelas" required>
                                    <option selected>Kelas</option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div>
                            <!-- 
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control bg-light border-0 datetimepicker-input" placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div> -->
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
@endsection