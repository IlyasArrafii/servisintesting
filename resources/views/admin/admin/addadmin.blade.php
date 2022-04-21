@include('admin.layout.header')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Add Admin</h1>
    </div>
  </section>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control" name="nama" autocomplete="off" placeholder="Nama">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">email</label>
              <div class="col-sm-12 col-md-7">
                <input type="email" class="form-control" name="email" autocomplete="off" placeholder="example@gmail.com">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
              <div class="col-sm-12 col-md-7">
                <input type="Password" class="form-control" name="password" autocomplete="off" placeholder="password">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password</label>
              <div class="col-sm-12 col-md-7">
                <input type="Password" class="form-control" name="password_confirmation()" autocomplete="off" placeholder="password">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
              <div class="col-sm-12 col-md-7">
                <button class="btn btn-primary">Simpan</button>
                <a href="" class="btn btn-danger">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

</div>
@include('admin.layout.footer')