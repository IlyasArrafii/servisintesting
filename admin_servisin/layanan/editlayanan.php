<?php 
include('../layout/header.php');
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Layanan</h1>
    </div>
  </section>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode Layanan</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control"  name="kode" readonly autocomplete="off" placeholder="L0001">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
              <div class="col-sm-12 col-md-7">
                <input type="file" class="form-control"  name="icon">
              </div>
            </div>

            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Layanan</label>
              <div class="col-sm-12 col-md-7">
               <input type="text" class="form-control"  name="nama" autocomplete="off" placeholder="AC">
             </div>
           </div>

           <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
            <div class="col-sm-12 col-md-7">
             <input type="text" class="form-control"  name="harga" autocomplete="off" placeholder="10000">
           </div>
         </div>

         <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button class="btn btn-warning">Edit</button>
            <a href="layanan.php" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>

</div>

<?php 
include('../layout/footer.php');
?>