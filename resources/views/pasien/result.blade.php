@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Pasien</h1>
<br>
     
@if (count($pasien))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Id Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>No KTP</th>
                <th>Aksi</th>
                </tr>

                @foreach($pasien as $pasien)
                <tr>
                <td>{{$pasien->id_pasien}}</td>
                <td>{{$pasien->nama_pasien}}</td>
                <td>{{$pasien->jenis_kelamin}}</td>
                <td>{{$pasien->ttl}}</td>
                <td>{{$pasien->alamat}}</td>
                <td>{{$pasien->no_telepon}}</td>
                <td>{{$pasien->no_ktp}}</td>

                    
                    <td><a href="">Edit</a> | <a href="/hapus/destroy/{{ $pasien->id_pasien }}">Hapus</a></td>
                </tr>
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection