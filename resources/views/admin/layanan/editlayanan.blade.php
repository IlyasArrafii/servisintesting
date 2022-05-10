@include('admin.layout.header')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Layanan</h1>
    </div>
  </section>

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

            <!-- <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="harga" autocomplete="off" placeholder="10000">
              </div>
            </div> -->

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

@include('admin.layout.footer')