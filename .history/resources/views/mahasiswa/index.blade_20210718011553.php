@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Mahasiswa
                <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                            <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                            @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mk->id }}</td>
                            <td>{{ $mk->kd_makul }}</td>
                            <td>{{ $mk->nama_makul }}</td>
                            <td>{{ $mk->sks }}</td>

                            <td>
                              <a href="{{ route('makul.edit', $mk->id) }}" class="btn btn-sm btn-warning">EDIT</a>
                              <a href="{{ route('hapus.makul', $mk->id) }}" class="btn btn-sm btn-danger">HAPUS</a>
                            </td>

                        </tr>
                        @endforeach

                        </table>
                   </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
