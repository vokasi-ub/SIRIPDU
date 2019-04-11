@extends('template.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Pasien</h1>
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
                
                <input type="text" class="form-control" name="cari" placeholder="Search Data Pasien">
              </div>
                </div>
              </div>
            </div>
          </form>
            <!-- /.box-body -->
          </div>
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Daftar Pasien</h3>
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
                <h4 class="modal-title">Masukkan Data Pasien</h4>
              </div>
              <form class="form-horizontal" action="/inputdatapasien/store" method="post">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Pasien</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Id Pasien" name="id_pasien">
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Pasien</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Pasien" name="nama_pasien">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Jenis Kelamin" name="jenis_kelamin">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="No Telepon" name="no_telepon">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">TTL</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="TTL" name="ttl">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="alamat">
                  </div>
                </div>


                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No KTP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="No KTP" name="no_ktp">
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


               <td>
                      <a href="/pasienedit/edit/{{ $pasien->id_pasien }}">Edit</a> 
                        <a href="/delete/pasien/{{ $pasien->id_pasien}}">Hapus</a>
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