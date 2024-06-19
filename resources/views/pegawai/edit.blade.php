{{-- @extends('layout.template') --}}

@extends('main')

@section('title', 'Dashboard')

@section('konten')

 <form action='{{ url('pegawai/'.$data->nik) }}' method='post'>
    @csrf 
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('pegawai')}}' class='btn btn-secondary'> << Kembali</a>
               <div class="my-3 p-3 bg-body rounded shadow-sm">
                    <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nik</label>
                        <div class="col-sm-10">
                    {{ $data->nik }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $data->jenis_kelamin}}" required="">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' value="{{ $data->jabatan }}" id="jabatan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nomor_telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nomor_telepon' value="{{ $data->nomor_telepon }}" id="nomor_telepon">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_masuk" value="{{ $data->tanggal_masuk ?? now()->format('Y-m-d') }}" required>
                </div>
            </div>
    
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                </div>
            </div>
        </div>
    </form>
    
    @endsection