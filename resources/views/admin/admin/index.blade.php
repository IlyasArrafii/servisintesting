@extends('admin.layout.main')
@section('judul', 'Admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Data Admin</li>
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
                    <a href="{{url('/admin/add-admin/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Admin </a>
                </div>
                <div class="col-md-3">
                </div>

            </div>
            <br>
            <!-- ./col -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Admin</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <!-- <td><img src="{{ asset('storage/'.$item->gambar.'')}}" width="130" height="150" class="rounded-circle"></td> -->
                                <td>
                                    <a href="{{url('/anggota/'.$item->id.'')}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" data-id="{{$item->id}}" class="btn btn-danger confirm"><i class="fas fa-trash-alt"></i></a>
                                    <form action="/anggota/{{$item->id}}" id="delete{{$item->id}}" method="post" class="d-inline">
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
<script text="text/javascript">
    $(".confirm").on('click', function(e) {
        id = e.target.dataset.id;
        Swal.fire({
                title: 'Yakin akan menghapus ?',
                text: 'Data akan dihapus permanen!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(`#delete${id}`).submit();
                } else {

                }
            });
    });
</script>
@endsection