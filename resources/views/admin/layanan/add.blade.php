@extends('admin.layout.main')
@section('judul', 'Add Layanan')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Admin</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Admin</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Layanan</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ url('/admin/layanan/tambah') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kode Layanan</label>
                                        <input type="text" class="form-control" name="kode" readonly autocomplete="off" placeholder="Kode Layanan" value="{{ $kode }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama Layanan</label>
                                        <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="AC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Icon</label>
                                        <input type="file" class="form-control" name="icon">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName2" class="col-form-label">Syarat & Ketentuan</label>
                                        <div class="col-sm-14">
                                            <textarea type="text" class="form-control" name="syarat" placeholder="Syarat dan Ketentuan" id="editor"></textarea>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ url('/admin/layanan') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
