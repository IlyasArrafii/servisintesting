@extends('admin.layout.main')
@section('judul', 'Home')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        <!-- ./col -->
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$konsumen}}</h3>

              <p>Konsumen</p>
            </div>
            <div class="icon">
              <i class="fa-regular fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          <div class="small-box bg-info">
            <div class="inner">
              <h3></h3>

              <p>Konsumen</p>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
          </div>

          <div class="small-box bg-danger">
            <div class="inner">
              <h3></h3>

              <p>Total Transaksi Belum Dibayar</p>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-3">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3></h3>

              <p style="font-size: 11.3pt;">Total Transaksi Menunggu Konfirmasi</p>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
          </div>
          <div class="small-box bg-danger">
            <div class="inner">
              <h3></h3>

              <p>Total Transaksi Ditolak</p>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-3">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">


              <p>Laporan Pendapatan</p>
            </div>
            <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-none"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-7">

        </div>
      </div>
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-7">
          <h3>Filter Chart Date</h3>
          <form action="{{url('/dashboard')}}" method="GET">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="date" class="form-control" name="tgl1">
                </div>
              </div>
              <div class="col-md-6">
                <input type="date" class="form-control" name="tgl2">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
          </form>
        </div>
      </div>
      <br>


    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection