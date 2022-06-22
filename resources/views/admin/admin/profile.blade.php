@extends('admin.layout.main')
@section('judul', 'Profile')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{session()->get('SessionNama')}}</h3>

                            <p class="text-muted text-center">Jabatan</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Followers</b> <a class="float-right">1,322</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Following</b> <a class="float-right">543</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="#password" data-toggle="tab">Change Password</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Tab pane Profile -->
                                <div class="active tab-pane" id="profile">
                                    <!-- Post -->
                                    <form action="{{ url('/profile')}}" method="POST" class="form-horizontal">
                                        @csrf
                                        <input type="hidden" name="id_admin" value="{{session()->get('SessionAdmin')}}">
                                        <div class="form-group">
                                            <label for="inputNama" class="col-form-label">Nama</label>
                                            <div class="col-sm-14">
                                                <input type="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" id=" inputNama" placeholder="Nama">
                                                @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTlp" class="col-md-4 col-form-label">No Telepon</label>
                                            <div class="col-sm-14">
                                                <input type="telp" name="telp" class="form-control @error('telp') is-invalid @enderror" id=" inputTlp" placeholder="No Telepon">
                                                @error('telp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-danger">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.post -->
                                </div>
                                <!-- Tab Pane password -->
                                <div class="tab-pane" id="password">
                                    <!-- Post -->
                                    <form action="{{ url('/change-password')}}" method="POST" class="form-horizontal">
                                        @csrf
                                        <input type="hidden" name="id_admin" value="{{session()->get('SessionAdmin')}}">
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-form-label">Password</label>
                                            <div class="col-sm-14">
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id=" inputPassword" placeholder="Password Baru" required>
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
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <br>
                    <br>
                    <br>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection