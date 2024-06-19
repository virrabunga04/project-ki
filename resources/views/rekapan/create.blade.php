{{-- @extends('main')

@section('title', 'Dashboard')

@section('rekapKonten') --}}

<!-- modal tambah rekap -->
<form action="/penjualan" method="post"> 
    @csrf
    <div class="modal fade" id="myModalTambah" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal content tambah-->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Rekap</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Tanggal</p>
                    <input type="date" name="Tanggal" placeholder="Tanggal" class="form-control"><br>
                    <p>Nama Menu</p>
                    <input type="text" name="Nama_Menu" placeholder="Nama Menu" class="form-control"><br>
                    <p>Jumlah Terjual</p>
                    <input type="text" name="Total_Terjual" placeholder="Total Terjual" class="form-control"><br>
                    <p>Subtotal</p>
                    <input type="text" name="Subtotal" placeholder="Subtotal" class="form-control"><br>
                    <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- modal tambah rekap -->
