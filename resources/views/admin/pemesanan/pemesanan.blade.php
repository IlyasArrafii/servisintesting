@include('../layout/header.php')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Pemesanan</h1>
		</div>
	</section>

	<div class="card">
		<div class="table-responsive">
			<table id="example1" class="table table-striped table-md">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>No.Whatsapp</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$item->uid}}</td>
						<td>{{$item->nama}}</td>
						<td>{{$item->email}}</td>
						<td class="text-center"><a href="https://wa.me/+6285646639557?text=Apakah Benar Anda Telah Melakukan Pemesanan ?" class="btn btn-success">Konformasi</a>
						</td>
					</tr>


				</tbody>


			</table>
		</div>
	</div>
</div>
@include('../layout/footer.php')