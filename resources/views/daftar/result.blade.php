@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar</h1>
<br>
     
@if (count($daftar))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Id Daftarr</th>
                <th>Id Pasien</th>
                <th>Id Dokter</th>
                <th>Id Poli</th>
                <th>Status</th>
                <th>Jenis Bayar</th>
                <th>Aksi</th>
                </tr>

                @foreach($daftar as $daftar)
                <tr>
                <td>{{$daftar->id_daftar}}</td>
                <td>{{$daftar->id_pasien}}</td>
                <td>{{$daftar->id_dokter}}</td>
                <td>{{$daftar->id_poli}}</td>
                <td>{{$daftar->status}}</td>
                <td>{{$daftar->jenis_bayar}}</td>
               

                    
                    <td><a href="">Edit</a> | <a href="/hapus/destroy/{{ $daftar->id_daftar }}">Hapus</a></td>
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
