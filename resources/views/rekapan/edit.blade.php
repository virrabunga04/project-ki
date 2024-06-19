<!-- Modal/Notif edit -->
<form action="{{ url('penjualan/' . $item->Tanggal) }}" method="post">
    @csrf
    @method('PUT')
    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal content-->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Rekap</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">                 
                    <div class="form-group row">
                        <label for="Tanggal" class="col-sm-10 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ $item->Tanggal }}</span>
                                </div>
                                <input type="hidden" name="Tanggal" value="{{ $item->Tanggal }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Nama_Menu" class="col-sm-10 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ $item->Nama_Menu }}</span>
                                </div>
                                <input type="hidden" name="Nama_Menu" value="{{ $item->Nama_Menu }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Total_terjual" class="col-sm-10 col-form-label">Jumlah Terjual</label>
                        <div class="col-sm-9">
                            <input type="text" name="Total_terjual" placeholder="Total Terjual" class="form-control"
                                value="{{ $item->Total_Terjual }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Subtotal" class="col-sm-10 col-form-label">Subtotal</label>
                        <div class="col-sm-9">
                            <input type="text" name="Subtotal" placeholder="Subtotal" class="form-control"
                                value="{{ $item->Subtotal }}">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="page-footer float-left">
                        <button type="submit" class="btn btn-secondary" data-dismiss="Batal">Batal</button>
                    </div>
                    <div class="page-footer float-right">
                        <button type="submit" class="btn btn-primary" name="Update">Simpan Perubahan</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal/Notif edit -->
