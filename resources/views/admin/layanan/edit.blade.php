@extends('admin.layout.main')
@section('judul', 'Edit Data Layanan')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Layanan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
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
            <form action="{{url('/admin/layanan/update')}}" method="POST" enctype="multipart/form-data">
              @foreach($layanan as $item)
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Layanan</label>
                  <input type="text" class="form-control" name="kode" readonly autocomplete="off" placeholder="Kode Layanan" value="{{$item->kode_layanan}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Icon</label>
                  @if($item->icon)
                  <img src="{{ asset('storage/'.$item->icon.'')}}" class="mb-3 col-sm-5 d-block" width="150">
                  @else
                  <img class="img-preview img-fluid mb-3 col-sm-5">
                  @endif
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="form-control" name="icon" onchange="previewImage()" id="gambar">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Layanan</label>
                  <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="AC" value="{{$item->nama_layanan}}">
                </div>
                <div class="form-group">
                  <label for="editor">Syarat & Ketentuan</label>
                  <textarea type="text" class="form-control" name="syarat" placeholder="Syarat dan Ketentuan" id="editor">{{$item->syarat}}</textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Edit</button>
                <a href="{{url('/admin/layanan')}}" class="btn btn-danger">Cancel</a>
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

@endsection