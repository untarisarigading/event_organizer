@extends('layout.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>General Form</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Klien</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('klien.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama" >
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="nomor">No Telepon</label>
                  <input type="nomor" id="nomor_telepon" class="form-control" placeholder="Input Nomor"></textarea>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="textarea" name="alamat" id="alamat" class="form-control" placeholder="Enter Alamat" >
                </div>
                <div class="form-group">
                  <label for="date">Tanggal Acara</label>
                  <input type="date" name="tanggal_pernikahan" id="tanggal_pernikahan" class="form-control" placeholder="Input Tanggal Acara" >
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection