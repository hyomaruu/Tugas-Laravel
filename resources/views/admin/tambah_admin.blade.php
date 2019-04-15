@extends('admin.index')
@section('isi')

<div class="col-md-12 bg-white">
  <div class="box box-info">
    <div class="box-header with-border bg-white">
      <h3 class="box-title">Admin</h3>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        @php
          $barang = \App\User::all();
          $i = 1;
        @endphp
        @foreach($barang as $b)
        @php
          $id_jenis = \App\tbl_jenis_barang::where('id', $b->kode_jenis)->value('jenis');
        @endphp
        <tbody>
          <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$b->name}}</td>
            <td>{{$b->email}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

<div class="col-md-12 bg-white">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border bg-white">
              <h3 class="box-title">Tambah Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="save_admin">
              @csrf
              <div class="box-body bg-white">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Admin" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Password" name="password">
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