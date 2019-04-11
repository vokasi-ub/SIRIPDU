@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Daftar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($daftar as $p)
            <form class="form-horizontal" action="/datadaftar/update" method="post">
               {{ csrf_field() }}
              
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id_daftar }}"> <br/>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Daftar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_daftar" value="{{ $p->id_daftar }}" placeholder="Id Daftar">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Pasien</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pasien" value="{{ $p->id_pasien }}" placeholder="Id Pasien">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_dokter" value="{{ $p->id_dokter }}" placeholder="Id Dokter">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Poli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_poli" value="{{ $p->id_poli }}" placeholder="Id Poli">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="{{ $p->status }}" placeholder="Status">
                  </div>
                </div>

                <label for="inputPassword3" class="col-sm-2 control-label">Jenis Bayar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_bayar" value="{{ $p->jenis_bayar }}" placeholder="Jenis Bayar">
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