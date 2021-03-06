@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Dokter</h1>
<br>
     <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Search</h3>
            </div>
            <form action="{{ url('query') }}" method="GET">

            <div class="box-body">
              <div class="row">
                <div class="col-xs-5">
                  <div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Cari</button>
                </div>
                <!-- /btn-group -->
                
                <input type="text" class="form-control" name="cari" placeholder="Search Id Dokter">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Daftar Dokter</h3>
            </div>
            
            <div class="box-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Tambah Data
              </button>
              
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Masukkan Data Dokter</h4>
              </div>
              <form class="form-horizontal" action="/inputdatadokter/store" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Id Dokter" name="id_dokter">
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Dokter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Dokter" name="nama_dokter">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Hp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="No Hp" name="no_hp">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Spesialis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Spesialis" name="spesialis">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Id Poli</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Id Poli" name="id_poli">
                  </div>
                </div>

                 
              


                
                

                  
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            
              <!-- /.box-footer -->
  
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </form>
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
                


               <td>
                      <a href="/dokteredit/edit/{{ $dokter->id_dokter }}">Edit</a> 
                        <a href="/delete/dokter/{{ $dokter->id_dokter}}">Hapus</a>
                    </td>
                </tr>

                    
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection