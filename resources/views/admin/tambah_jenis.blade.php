@extends('admin.index')
@section('isi')
<div class="col-md-12 bg-white">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border bg-white">
              <h3 class="box-title">Tambah Jenis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="save_jenis">
              @csrf
              <div class="box-body bg-white">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Jenis Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Jenis Barang" name="jenis">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer bg-white">
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</div>
@endsection