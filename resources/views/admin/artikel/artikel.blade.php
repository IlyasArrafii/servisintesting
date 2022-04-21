<?php 
include('../layout/header.php');
?>

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Artikel</h1>
		</div>
	</section>
	<div class="row">
		<div class="col-md-8">
			<a href="addartikel.php" class="btn btn-success mb-3">Add Artikel</a>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Judul Artikel</th>
						<th scope="col">Tanggal Publikasi</th>
						<th scope="col">Kategori</th>
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
		<div class="col-md-4">

			<form action="{{url('/postkaryawan')}}" method="POST">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h5>Add Kategori</h5>
								<hr>
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Kategori</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" class="form-control"  name="kategori" autocomplete="off" placeholder="Tips & trick">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


</div>

<?php 
include('../layout/footer.php');
?>