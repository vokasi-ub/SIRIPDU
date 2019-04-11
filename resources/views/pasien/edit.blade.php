@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Pasien</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Daftar Pasien</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($pasien as $p)
            <form class="form-horizontal" action="/datapasien/update" method="post">
               {{ csrf_field() }}
              
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id_pasien }}"> <br/>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Pasien</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pasien" value="{{ $p->id_pasien }}" placeholder="Id Pasien">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Pasien</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pasien" value="{{ $p->nama_pasien }}" placeholder="Nama Pasien">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_kelamin" value="{{ $p->jenis_kelamin }}" placeholder="Jenis Kelamin">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ttl" value="{{ $p->ttl }}" placeholder="TTL">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $p->alamat }}" placeholder="Alamat">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telepon" value="{{ $p->no_telepon }}" placeholder="No Telepon">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No KTP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_ktp" value="{{ $p->no_ktp }}" placeholder="No KTP">
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