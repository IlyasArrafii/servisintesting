@extends('admin.layout.main')
@section('judul', 'Detail Pesanan')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Pemesanan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            <a href="{{ url('/admin/pemesanan') }}" class="btn btn-primary"><i class="fas fa-chevron-left"> </i> Kembali</a>
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="col-mt-3">
                <div class="card card-primary collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Detail Pemesanan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    @foreach ($pemesanan as $item)
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="container">
                                <div class="span-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Kode Pemesanan</strong></label>
                                                        <input type="text" class="form-control" readonly placeholder="Kode Pemesanan" value="{{ $item->kode_pemesanan }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Kode Layanan</strong></label>
                                                        <input type="text" class="form-control" readonly placeholder="Kode Layanan" value="{{ $item->kode_layanan }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Nama Lengkap</strong></label>
                                                        <input type="text" name="nama" class="form-control" readonly placeholder="Nama" value="{{ $item->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>No Telpon</strong></label>
                                                        <input type="text" name="nama_ayah" class="form-control" readonly placeholder="Nama Ayah" value="{{ $item->notelpon }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Alamat</strong></label>
                                                        <input type="text" name="tempat_lahir" class="form-control" readonly placeholder="Tempat Lahir " value="{{ $item->alamat }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Kecamatan</strong></label>
                                                        <input type="text" class="form-control" id="tanggal" name="tgl" readonly required value="{{ $item->kecamatan }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Kota</strong></label>
                                                        <input type="text" name="no_telpon" class="form-control" readonly value="{{ $item->kota }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><strong>Detail Alamat</strong></label>
                                                        <input type="text" name="kode_pos" class="form-control" readonly value="{{ $item->detail_alamat }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for=""><strong>Keluhan</strong></label>
                                                        <input type="text" name="provinsi" class="form-control" readonly value="{{ $item->keluhan }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>

@endsection
