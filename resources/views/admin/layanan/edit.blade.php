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
            <form action="{{url('/layanan/update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @foreach($layanan as $item)
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode Layanan</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="kode" readonly autocomplete="off" placeholder="Kode Layanan" value="{{$item->kode_layanan}}">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
                        @if($item->icon)
                        <img src="{{ asset('storage/'.$item->icon.'')}}" class="mb-3" width="150">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="input-group col-sm-12 col-md-7">
                          <input type="file" class="form-control" name="icon">
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Layanan</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="AC" value="{{$item->nama_layanan}}">
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Syarat dan Ketentuan</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea type="text" class="form-control" name="syarat" placeholder="Syarat dan Ketentuan"></textarea>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-warning">Edit</button>
                          <a href="{{url('/layanan')}}" class="btn btn-danger">Cancel</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection