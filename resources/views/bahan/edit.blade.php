@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Bahan Baku Penjualan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#"> Stok Bahan</a></li>
                            <li class="active">Edit</i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('content')        
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong class="card-title">Edit Bahan Baku</strong>
                </div>
                <div class="pull-right">
                    <a href="{{url ('listStok')}}" class="btn btn-secondary btn-sm">
                        <i class=" fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{url('listStok/' .$edbahan->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label> Nama Bahan </label>
                                <input type="text" name="nama" class="form-control" value="{{ $edbahan->nama_bahan }}" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Stok</label>
                                <input type="text" name="jumlah" class="form-control" value="{{ $edbahan->jumlah_Stok }}" required>
                            </div>                            
                            <button type="submit" class="btn btn-info">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>


</body>
</html>
