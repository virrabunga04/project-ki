@extends('main')

@section('title', 'Dashboard')

@section('rekapbreadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Penjualan</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Rekap Penjualan</strong>
                            <div class="float-right">
                                <!-- button tambah rekap -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModalTambah">Tambah</button>
                                <!-- button tambah rekap -->
                                @include('rekapan.create')
                            </div>
                        </div>

                        <!-- tabel data -->
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped">
                                <thead>

                                    <th>Tanggal</th>
                                    <th>Nama Menu</th>
                                    <th>Jumlah Terjual</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>

                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->Tanggal }}</td>
                                            <td>{{ $item->Nama_Menu }}</td>
                                            <td>{{ $item->Total_Terjual }}</td>
                                            <td>{{ $item->Subtotal }}</td>
                                            <td>

                                                <a href='{{ url('penjualan/' . $item->Tanggal . '/edit') }}'
                                                    class="btn btn-warning" data-toggle="modal"
                                                    data-target="#myModalEdit">Edit</a>

                                                @include('rekapan.edit')


                                                <form onsubmit="return confirm('Yakin akan menghapus data?')"
                                                    class='d-inline' action="{{ url('penjualan/' . $item->Tanggal) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" name="submit"
                                                        class="btn btn-danger btn-sm">Del</button>
                                                </form>


                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- baris total penjualan hari ini -->
                                    {{-- <tr>
                                    <td>
                                        Total
                                    </td>
                                </tr> --}}
                                    <!-- baris total penjualan hari ini -->
                                </tbody>
                            </table>
                        </div>
                        <!-- tabel data -->
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

   
@endsection
