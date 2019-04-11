@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Dokter</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Daftar Dokter</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($dokter as $p)
            <form class="form-horizontal" action="/datadokter/update" method="post">
               {{ csrf_field() }}
              
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id_dokter }}"> <br/>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_dokter" value="{{ $p->id_dokter }}" placeholder="Id Dokter">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_dokter" value="{{ $p->nama_dokter }}" placeholder="Nama Dokter">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Hp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" value="{{ $p->no_hp }}" placeholder="No Hp">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Spesialis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="spesialis" value="{{ $p->spesialis }}" placeholder="Spesialis">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Poli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_poli" value="{{ $p->id_poli }}" placeholder="Id Poli">
                  </div>
                </div>

                






      
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection