@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="pull-left">
            <strong>Edit Menu</strong>
        </div>
        <div class="pull-ridght">
            <a href="{{ url('menu')}}" class="btn btn-success btn-sm">
                <i class="fa fa-undo"></i>Back</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{ url('menu/' . $editmenu->id) }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-grup">
                            <label>ID Menu</label>
                            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', $editmenu->id)}}" required>
                            {{-- @error('id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror   --}}
                        </div>
                        <div class="form-grup">
                            <label>Nama Menu</label>
                            <input type="text" name="nama_menu" class="form-control @error('nama_menu') is-invalid @enderror" value="{{ old('nama_menu', $editmenu->nama_menu)}}"required>
                            {{-- @error('nama_menu')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror  --}}
                        </div> 
                        <div class="form-grup">
                            <label>Bahan baku</label>
                            <textarea name="bahan_baku" class="form-control" value="{{ old('bahan_baku')}}" required>{{ old('bahan_baku', $editmenu->bahan_baku) }}</textarea>
                        </div>
                        <div class="form-grup">
                            <label>Jenis Menu</label>
                            <input type="text" name="jenis_menu" class="form-control @error('jenis_menu') is-invalid @enderror" value="{{ old('jenis_menu',$editmenu->jenis_menu)}}"required>
                            {{-- @error('jenis_menu')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror                         --}}
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>

            </div>
        </div>
        {{-- <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Menu</th>
                        <th>Bahan baku</th>
                        <th>Jemis menu</th>
                    </tr>                
                </thead>
                <tbody>
                    <tr>
                        @foreach ($menu as $items)
                      <tr>
                        <td>{{$items->id}}</td>
                        <td>{{$items->nama_menu}}</td>
                        <td>{{$items->bahan_baku}}</td>
                        <td>{{$items->jenis_menu}}</td>
                        <td>
                        @foreach ($menu as $item)
                        </tr>
                    </tr>
                </tbody>
            </table>
        </div> --}}
    </div>
</div>
@endsection