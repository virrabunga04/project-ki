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
@endsection

@section('rekapcontent')
    <div class="content mt-3">
        <div class="animated ">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Rekapitulasi Penjualan</strong>
                            <div class="float-right">
                                <!-- button tambah rekap -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModalTambah">Tambah</button>
                                <!-- modal tambah rekap -->
                                <div class="modal fade" id="myModalTambah" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal content-->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tambah Rekap</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="date" name="tanggal" placeholder="Tanggal"
                                                    class="form-control"><br>
                                                <input type="text" name="nama_menu" placeholder="Nama Menu"
                                                    class="form-control"><br>
                                                <input type="text" name="jumlah_terjual" placeholder="Jumlah Terjual"
                                                    class="form-control"><br>
                                                <input type="text" name="subtotal" placeholder="Subtotal"
                                                    class="form-control"><br>                                    
                                                <div class="page-footer float-right">
                                                    <button type="submit" class="btn btn-primary"
                                                        name="tambah">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal tambah rekap -->
                            </div>
                        </div>

                        <!-- tabel data -->
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Menu</th>
                                        <th>Jumlah Terjual</th>
                                        <th>Subtotal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>$320,800</td>
                                        <td>
                                            <!-- button edit -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#myModalEdit">Edit</button>

                                            <!-- Modal/Notif edit -->
                                            <div class="modal fade" id="myModalEdit" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal content-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Tambah Rekap</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="date" name="tanggal" placeholder="Tanggal"
                                                                class="form-control"><br>
                                                            <input type="text" name="nama_menu" placeholder="Nama Menu"
                                                                class="form-control"><br>
                                                            <input type="text" name="jumlah_terjual"
                                                                placeholder="Jumlah Terjual" class="form-control"><br>
                                                            <input type="text" name="subtotal" placeholder="Subtotal"
                                                                class="form-control"><br>
                                                            <input type="text" name="nama_menu" placeholder="Nama Menu"
                                                                class="form-control">

                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="page-footer float-left">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="tambah">Batal</button>
                                                            </div>
                                                            <div class="page-footer float-right">
                                                                <button type="submit" class="btn btn-primary"
                                                                    name="tambah">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal/Notif edit -->

                                            <!-- button hapus -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#myModalHapus">Hapus</button>
                                            <!-- Modal/Notif hapus-->
                                            <div class="modal fade" id="myModalHapus" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal content-->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Rekap</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Tidak</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name="tambah">Ya</button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                name="tambah">Tambah</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal/Notif hapus-->
                                        </td>
                                    </tr>
                                    <!-- baris total penjualan hari ini -->
                                    <tr>
                                        <td>
                                            Total
                                        </td>
                                    </tr>
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
