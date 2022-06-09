@extends('layouts.admin.master')
@section('statussidepanel3', 'active')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">List Dokter</h6>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jam Datang</th>
                            <th scope="col">Jam Pulang</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokters as $dokter)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$dokter->nama_dokter}}</td>
                            <td>{{$dokter->jam_datang}}</td>
                            <td>{{$dokter->jam_pulang}}</td>
                            <td>
                                <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST">
                                    <a class="btn btn-primary m-2" href="{{ route('dokter.edit', $dokter->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-2" onclick="return confirm('Apa anda yakin menghapus data tersebut?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12">
        <a href="{{ route('dokter.create') }}" class="btn btn-success m-2"><i class="fa fa-user-plus me-2"></i>Tambah Data</a>
    </div>
</div>
@endsection