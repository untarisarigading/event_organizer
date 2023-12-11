@extends('layout.master')

@section('title', 'rencana_acara') 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Booking Acara</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Booking Acara</li>
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
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('rencana_acara.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Ketik Nama">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input type="text" class="form-control" name="umur" id="umur" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea class="form-control" rows="3" name="bio" placeholder="Ketik Bio"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a type="{{ route('rencana_acara.index') }}" class="btn btn-primary">Back</a>
                    <div class="card-footer">
                        <button type="create" class="btn btn-primary">Booking</button>
                    </div>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
@endsection