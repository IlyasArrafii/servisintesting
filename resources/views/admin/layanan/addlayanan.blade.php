@include('admin.layout.header')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Add Layanan</h1>
    </div>
  </section>

  <form action="{{url('/layanan/tambah')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode Layanan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="kode" readonly autocomplete="off" placeholder="Kode Layanan" value="{{$kode}}">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" class="form-control" name="icon">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Layanan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="AC">
              </div>
            </div>

            <!-- <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="harga" autocomplete="off" placeholder="10000">
              </div>
            </div> -->

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Simpan</button>
                <a href="layanan.php" class="btn btn-danger">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>

@include('admin.layout.footer')