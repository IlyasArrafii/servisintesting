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
                                        <label for="gender">Jabatan</label>
                                        <select name="roles" class="form-control" id="roles">
                                            <option value='manager'>Manager</option>
                                            <option value='karyawan'>Karyawan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword" class="col-form-label">Password</label>
                                        <div class="col-sm-14">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id=" inputPassword" placeholder="Password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-form-label">Konfirmasi Password</label>
                                        <div class="col-sm-14">
                                            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="inputName2" placeholder="Konfirmasi Password" required>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ url('/admin/data-admin') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Layanan</h1>
            </div>
        </section>

        <form action="{{ url('/admin/layanan/tambah') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode Layanan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="kode" readonly autocomplete="off" placeholder="Kode Layanan" value="{{ $kode }}">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" name="icon">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Layanan</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="AC">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Syarat dan Ketentuan</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea type="text" class="form-control" name="syarat" placeholder="Syarat dan Ketentuan" id="editor"></textarea>
                                </div>
                            </div>

                            <!-- <div class="form-group row mb-4">
                                                                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                                                                          <div class="col-sm-12 col-md-7">
                                                                            <input type="text" class="form-control" name="harga" autocomplete="off" placeholder="10000">
                                                                          </div>
                                                                        </div> -->

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Simpan</button>
                                    <a href="{{ url('/layanan') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection
