<?php 
include('../layout/header.php');
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Konsumen</h1>
    </div>
</section>

<div class="row">
<!-- 	<div class="col-md-9">
		<a href="{{url('/tambah-karyawan')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Data</a>
	</div> -->
	<div class="col-md-3">

	</div>
</div>
<div class="card">
	<div class="table-responsive">
		<table id="example1" class="table table-striped table-md">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>No.Whatsapp</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
			
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{$item->uid}}</td>
					<td>{{$item->nama}}</td>
					<td>{{$item->email}}</td>
				
				</tr>


			</tbody>


		</table>
	</div>
</div>
</div>
  <?php 
  include('../layout/footer.php');
  ?>