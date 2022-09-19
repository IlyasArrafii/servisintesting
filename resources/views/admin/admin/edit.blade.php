@include('admin.layout.header')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Hak Akses Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Hak Akses Admin</li>
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
                            <h3 class="card-title">Data Hak Akses Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('/admin/data-admin/update') }}" method="POST" enctype="multipart/form-data">
                            @foreach ($admin as $item)
                                @csrf
                                <input type="hidden" name="kode" value="{{ $item->id }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nama</label>
                                        <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="Nama" value="{{ $item->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email" value="{{ $item->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">No Telpon</label>
                                        <input type="text" class="form-control" name="notelpon" autocomplete="off" value="{{ $item->notelpon }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password" autocomplete="off" value="{{ $item->password }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Konfirmasi Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" autocomplete="off">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    <a href="{{ url('/admin/layanan') }}" class="btn btn-danger">Cancel</a>
                                </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
</div>

@include('admin.layout.footer')
