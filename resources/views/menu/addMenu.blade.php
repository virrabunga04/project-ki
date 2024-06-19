@extends('main')

@section('title', 'Dashboard')
    
@section('breadcrumbs')
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="pull-left">
            <strong>Tambah Menu</strong>
        </div>
        <div class="pull-ridght">
            <a href="{{ url('menu')}}" class="btn btn-success btn-sm">
                <i class="fa fa-undo"></i>Back</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url('menu')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id')}}" autofocus>
                            {{-- @error('id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror  --}}
                        </div>
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" name="nama_menu" class="form-control @error('nama_menu') is-invalid @enderror" value="{{ old('nama_menu')}}" autofocus>
                            {{-- @error('nama_menu')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror  --}}
                        </div> 
                        <div class="form-grup">
                            <label>Bahan baku</label>
                            <textarea name="bahan_baku" class="form-control" value="{{ old('bahan_banu')}}" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jenis Menu</label>
                            <input type="text" name="jenis_menu" class="form-control @error('jenis_menu') is-invalid @enderror" value="{{ old('jenis_menu')}}" autofocus>
                            {{-- @error('jenis_menu')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror  --}}
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection