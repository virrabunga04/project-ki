@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('content')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                            <a href="{{ url('menu/add')}}" class="btn btn-primary btn-sm">Tambah Menu</a>
                        </div>
                    <div class="card-body">
                        <div id="bootsrap-data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no_footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="bootstrao-data-table_length">
                                        <label>
                                            Show
                                            <select name="bootstrap-data-table_length" aria-controls="bootstrap-data-table" class="form-control dorm-control-sm"> 
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="-1">All</option>
                                            </select>
                                             entries
                                        </label>                                        
                                    </div>
                                 </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_filter" id="bootstrao-data-table_filter">
                                        <label>
                                            Search
                                            <input type="search" class="form-control form-control-sm" placeholder aris-controls="bootstrap-data-table">
                                        </label>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                            
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID Menu</th>
                                    <th>Nama</th>
                                    <th>Bahan Baku</th>
                                    <th>Jenis Menu</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu as $items)
                                <tr>
                                    <td>{{$items->id}}</td>
                                    <td><a href="{{ url('menu/detailMenu/' .$items->id) }}" class="btn btn-link">{{$items->nama_menu}}</a></td>
                                    <td>{{$items->bahan_baku}}</td>
                                    <td>{{$items->jenis_menu}}</td>
                                    <td>
                                        <a href="{{url('menu/edit/' .$items->id)}}" button type="button" class="btn btn-primary">Edit</button></a>
                                        <form action="{{ url('menu/' .$items->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tekan OK untuk menghapus Data')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>          
                                    {{-- <td>MA01</td>
                                    <td><button type="button" class="btn btn-link">menu1</button></td>
                                    <td>System Architect</td> --}}
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        @endsection

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>


    <script src="{{ asset('style/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/datatables-init.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
