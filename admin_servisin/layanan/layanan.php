<?php 
include('../layout/header.php');
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Layanan</h1>
    </div>
</section>
<a href="addlayanan.php" class="btn btn-success mb-3">Add Layanan</a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Layanan</th>
      <th scope="col">Nama Layanan</th>
      <th scope="col">Harga</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href="editlayanan.php" class="btn btn-warning">Edit</a> <a href="delete.php" class="btn btn-danger">Delete</a></td>
    </tr>
  </tbody>
</table>

</div>

  <?php 
  include('../layout/footer.php');
  ?>