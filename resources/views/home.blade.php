@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                {{-- <h1>Selamat Datang {{ Auth::user()->name}}</h1> --}}
                {{-- <h1>Selamat Datang</h1> --}}
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">List Menu</span> 
                </h4>
                <p class="text-light">Kelola daftar menu yang tersedia</p>
                <a href="{{ url('menu') }}" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">Stok Bahan</span>
                </h4>
                <p class="text-light">Manajemen inventaris bahan baku</p>
                <a href="{{ url('listStok') }}" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">Rekapan Penjualan</span>
                </h4>
                <p class="text-light">Pantau dan analisis data penjualan</p>
                <a href="penjualan" class="text-light d-block mb-3">view detail</a> 
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <h4 class="mb-0">
                    <span class="count">List Pegawai</span>
                </h4>
                <p class="text-light">Kelola informasi pegawai</p><br>
                <a href="tables-basic" class="text-light d-block mb-3">view detail</a>
            </div>
        </div>
    </div>
</div>
@endsection