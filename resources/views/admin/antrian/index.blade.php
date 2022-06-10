@extends('layouts.admin.master')
@section('statussidepanel4', 'active')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Antrian Table</h6>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No Antrian</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Poli</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($antrian as $antri)
                        <tr>
                            <td>{{$antri->nomor_antrian}}</td>
                            <td>{{$antri->pasien->nik}}</td>
                            <td>{{$antri->pasien->nama_lengkap}}</td>
                            <td>{{$antri->pasien->kelas}}</td>
                            <td>{{$antri->poli->nama_poli}}</td>
                            <td>{{$antri->status}}</td>
                            <td>
                                @if($antri->status == 'menunggu')
                                <a class="btn btn-outline-secondary" href="{{ route('antrian.ambil', $antri->id) }}">Ambil</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a class="btn btn-danger" href="{{ route('antrian.delete') }}">Delete All</a>
        </div>
    </div>
</div>

@endsection