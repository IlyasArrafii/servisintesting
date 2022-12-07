@extends('admin.layout.main')
@section('judul', 'Permissions')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Permissions</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Permissions</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="col-md-9">
                        <a href="{{ route('admin.permission.create') }}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Permissions </a>
                    </div>
                    <div class="col-md-3">
                    </div>

                </div>
                <br>
                <!-- ./col -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Permissions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table-bordered table-striped table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Permissions</th>
                                    <th>Guard Name</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->guard_name }}</td>
                                        <td>
                                            <a href="{{ route('admin.permission.edit', $permission) }}" class="btn btn-primary">Edit</a>
                                            <a href="#" data-id="{{ $permission->id }}" class="btn btn-danger confirm">Delete</a>
                                            <form action="{{ route('admin.permission.delete', $permission) }}" id="delete{{ $permission->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
