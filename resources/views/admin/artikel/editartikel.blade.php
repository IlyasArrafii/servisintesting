@extends('admin.layout.main')
@section('judul', 'Edit Data Artikel')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Layanan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Layanan</li>
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
                                <h3 class="card-title">Data Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.artikel.updateData') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @foreach ($artikel as $item)
                                    <input type="hidden" name="idArtikel" value="{{ $item->id }}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto Artikel</label>
                                            @if ($item->foto_artikel)
                                                <img src="{{ asset('storage/' . $item->foto_artikel . '') }}" class="col-sm-5 d-block mb-3" width="150">
                                            @else
                                                <img class="img-preview img-fluid col-sm-5 mb-3">
                                            @endif
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="form-control" name="fotoArtikel" onchange="previewImage()" id="gambar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Judul</label>
                                            <input type="text" class="form-control" name="judulArtikel" autocomplete="off" placeholder="AC" value="{{ $item->judul }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="editor">Deskripsi</label>
                                            <textarea type="text" class="form-control" name="deskripsiArtikel" placeholder="Syarat dan Ketentuan" id="editor">{{ $item->deskripsi }}</textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Edit</button>
                                        <a href="{{ route('admin.artikel.index') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
    </div>

@endsection
