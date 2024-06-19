{{-- @extends('layout.template') --}}

@extends('main')

@section('title', 'Dashboard')

@section('konten')
      <div class="container">
        <div class="row" style="margin-top:20px">
          <div class="col-12">
            <div class="card mx-auto">
              <div class="card-header text-center">
                <h3>Data Pegawai</h3>
             </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('pegawai')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                      <th>No</th>
                     <th>Nik</th>
                     <th>Nama</th>
                     <th>Jenis Kelamin</th>
                     <th>Jabatan</th>
                     <th style="width: 6%; text-align: center !important;">Actions</th>

                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem()?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->nik}}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->jenis_kelamin}}</td>
                            <td>{{ $item->jabatan}}</td>
                            <td class="text-center"width="21%">
                            <a href="{{ url('pegawai/'.$item->nik.'/show') }}" class="btn btn-secondary btn-sm">Detail</a>
                            <a href='{{ url("pegawai/$item->nik/edit") }}' class='btn btn-warning btn-sm'>Update</a>

                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action ="{{ url('pegawai/'.$item->nik)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                         </td>
                        </tr>   
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links()}}
          </div>
        </div>
      </div>
   </div>
          <!-- AKHIR DATA -->
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      </body>
    </html>
    @endsection