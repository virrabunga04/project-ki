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
                    <li class="active">List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')        
<div class="col">
    <div class="animated fadeIn">
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong class="card-title">
                        <a href="{{url('listStok/')}}">List Bahan Baku</a>
                    </strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('listStok/add')}}" class="btn btn-info btn-sm">
                        <i class=" fa fa-plus"></i> Tambah Bahan
                    </a>
                </div>
            </div>
            <div class="header-left">
                <div class="form-inline">
                    <form class="search-form" action="{{ url('listStok') }}" method="GET">
                        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search ..." aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if (isset($search))
                <div class="alert alert-info">
                    Search results for: <strong>{{ $search }}</strong>
                </div>
                @endif
                @if (count($bahan_baku) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id Bahan</th>
                            <th>Nama Bahan</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Supplier</th>
                            <th>Jumlah Stok</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bahan_baku as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nama_bahan}}</td>
                            <td>{{$item->Tanggal_Masuk}}</td>
                            <td>{{$item->Tanggal_Kadaluarsa}}</td>
                            <td>{{$item->Supplier}}</td>
                            <td>{{$item->jumlah_Stok}}</td>
                            <td class="text-center">
                                <a href="{{url('listStok/edit/' .$item->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{url('listStok/' . $item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Tekan OK untuk menghapus Data')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="alert alert-warning">
                    No results found.
                </div>
                @endif
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('style/assets/js/popper.min.js')}}"></script>
<script src="{{asset('style/assets/js/plugins.js')}}"></script>
<script src="{{asset('style/assets/js/main.js')}}"></script>
</body>
</html>
