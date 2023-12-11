@extends('layout.master')
@section('title','rencana_acara')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rencana Acara</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">rencana acara</li>
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
                            <h3 class="card-title">Data Booking</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class=" form-control" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $rencana_acara[0]->nama }}" disabled>
                            </div>
                                
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" class="form-control" name="umur" id="umur" placeholder="umur" value="{{ $rencana_acara[0]->umur }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" name="bio" id="bio" placeholder="Input Biografi" disabled>{{ $rencana_acara[0]->bio }}</textarea>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="/rencana_acara"><button type="submit" class="btn btn-primary">Kembali</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->

    </div>
 @endsection