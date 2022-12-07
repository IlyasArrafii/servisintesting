@extends('admin.layout.main')
@section('judul', 'Settings')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <strong>Profile</strong>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <p>Jika ingin mengganti data profil anda. Anda bisa menggantinya menggunakan edit profil</p>
                                <a href="{{ url('/admin/settings/profile/' .auth()->guard('admin')->user()->id .'') }}"><button type="button" class="btn btn-primary">Ganti Profil</button></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <strong>Ganti Kata Sandi</strong>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="pb-10">
                                    <p>Jika ingin mengganti kata sandi harap mengganti kata sandi yang mudah diingat. Anda bisa menggunakan pengelola kata sandi untuk mengubah.</p>
                                </div>

                                <a href="{{ route('admin.settings.password') }}"><button type="button" class="btn btn-primary">Ganti kata sandi</button></a>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
