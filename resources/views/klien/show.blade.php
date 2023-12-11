@extends('layout.master')
@section('title','klien')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Klien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">klien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Klien</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class=" form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $klien[0]->nama }}" disabled>
                            </div>
                                
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="email" value="{{ $klien[0]->email }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="nomor_telepone">No. Telepone</label>
                                <input type="number" class="form-control" name="nomor_telepone" id="nomor_telepone" placeholder="Enter Nomor" value="{{ $klien[0]->nomor_telepone }}" disabled>
                            </div>                            

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Input Biografi" disabled>{{ $klien[0]->alamat }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="date">Tanggal Acara</label>
                                <input type="date" class="form-control" name="date" id="date" placeholder="tentukan tanggal">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="/klien"><button type="submit" class="btn btn-primary">Kembali</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
 @endsection