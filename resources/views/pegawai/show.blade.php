
{{-- @extends('layout.template') --}}

@extends('main')

@section('title', 'Dashboard')

@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('pegawai')}}' class='btn btn-secondary'> << Kembali</a>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">Detail Pegawai</div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            @if ($data)
                                <tr>
                                    <th>Nik</th>
                                    <td>{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $data->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{ $data->jabatan }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <td>{{ $data->nomor_telepon }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <td>{{ $data->tanggal_masuk }}</td>
                                </tr>
                            @else
                                <tr>
                                    <td colspan="2">Data pegawai tidak ditemukan</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
