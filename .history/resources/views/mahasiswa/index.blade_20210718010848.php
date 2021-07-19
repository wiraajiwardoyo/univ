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
                            @php
                                $no = 1;
                            @endphp

                             @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $mhs->npm }}</td>
                            <td>{{ $mhs->user->name }}</td>
                            <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                            <td>{{ $mhs->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td>{{ $mhs->telepon }}</td>
                            <td>{{ $mhs->alamat }}</td>

                            <td>
                              <a href="" class="btn btn-sm btn-warning">EDIT</a>
                              <a href="" class="btn btn-sm btn-danger">HAPUS</a>
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
