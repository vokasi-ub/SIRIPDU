@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Poli</h1>
<br>
     
@if (count($poli))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>Id Poli</th>
                <th>Nama Poli</th>
                <th>Keterangan</th>
                <th>Aksi</th>
                </tr>

                @foreach($poli as $poli)
                <tr>
                <td>{{$poli->id_poli}}</td>
                <td>{{$poli->nama_poli}}</td>
                <td>{{$poli->keterangan}}</td>
               
               

                    
                    <td><a href="">Edit</a> | <a href="/hapus/destroy/{{ $poli->id_poli }}">Hapus</a></td>
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
