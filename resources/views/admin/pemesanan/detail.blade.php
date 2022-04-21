@include('admin.layout.header')

<div class="main-content">
    @foreach($pemesanan as $item)
    <section class="section">
        <div class="section-header">
            <h1>{{$item->kode_pemesanan}}</h1>
        </div>
        <!-- Default box -->
        <div class="col-mt-3">
            <div class="mb-3">
                <a href="{{url('/pemesanan')}}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card card-primary collapsed-card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card-body">
                        <div class="container">
                            <div class="span-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>Nama</strong></label>
                                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" readonly placeholder="Nama " value="{{$item->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>No Telpon</strong></label>
                                                    <input type="text" name="nama_ayah" class="form-control @error('nama_ayah') is-invalid @enderror" readonly placeholder="Nama Ayah" value="{{$item->notelpon}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>Alamat</strong></label>
                                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" readonly placeholder="Tempat Lahir " value="{{$item->alamat}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>Kecamatan</strong></label>
                                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" readonly placeholder="Tempat Lahir " value="{{$item->kecamatan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>Kota</strong></label>
                                                    <input type="text" name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror" readonly placeholder="No Telpon " value="{{$item->kota}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><strong>Detail Alamat</strong></label>
                                                    <input type="text" name="kode_pos" class="form-control @error('kode_pos') is-invalid @enderror" readonly placeholder="Kode Pos " value="{{$item->detail_alamat}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="" id="" cols="50" rows="10">{{$item->keluhan}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        @endforeach
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

@include('admin.layout.footer')