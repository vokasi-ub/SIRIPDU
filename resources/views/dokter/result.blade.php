@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Dokter</h1>
<br>
     
@if (count($dokter))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Id Dokter</th>
                <th>Nama Dokter</th>
                <th>No Hp</th>
                <th>Spesialis</th>
                <th>Id Poli</th>
                <th>Aksi</th>
                </tr>

                @foreach($dokter as $dokter)
                <tr>
                <td>{{$dokter->id_dokter}}</td>
                <td>{{$dokter->nama_dokter}}</td>
                <td>{{$dokter->no_hp}}</td>
                <td>{{$dokter->spesialis}}</td>
                <td>{{$dokter->id_poli}}</td>
               

                    
                    <td><a href="">Edit</a> | <a href="/hapus/destroy/{{ $dokter->id_dokter }}">Hapus</a></td>
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
