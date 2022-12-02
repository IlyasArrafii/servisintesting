@extends('admin.layout.main')
@section('judul', 'Add Artikel')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Artikel</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Artikel</li>
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
                                <h3 class="card-title">Data Artikel</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Judul Artikel</label>
                                        <input type="text" class="form-control" name="judulArtikel" placeholder="Judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Foto Artikel</label>
                                        <input type="file" class="form-control" name="fotoArtikel">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Author</label>
                                        <input type="text" class="form-control" name="namaAuthor" placeholder="Nama Author" disabled value="{{ auth()->guard('admin')->user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-form-label">Deskripsi</label>
                                        <div class="col-sm-14">
                                            <textarea type="text" class="form-control" name="deskripsiArtikel" placeholder="Syarat dan Ketentuan" id="editor"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
                                    <a href="{{ route('admin.artikel.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
