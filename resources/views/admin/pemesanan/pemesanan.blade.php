@include('admin.layout.header')

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
						<th>Kode Pemesanan</th>
						<th>Nama Lengkap</th>
						<th>No.Whatsapp</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pemesanan as $item)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$item->kode_pemesanan}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->notelpon}}</td>
						<td class="text-center"><a href="https://wa.me/+62{{$item->notelpon}}?text=Apakah Benar Anda Telah Melakukan Pemesanan di aplikasi servisin dengan data berikut : %0A%0ANama : {{$item->name}}%0AAlamat : {{$item->alamat}}%0AKecamatan : {{$item->kecamatan}}%0AKota : {{$item->kota}}%0AKeluhan : {{$item->keluhan}}" class="btn btn-success">Konformasi</a>
							<a href="{{url('/detail-pesanan/'.$item->id.'')}}" class="btn btn-primary">Detail Pesanan</a>
						</td>
					</tr>
					@endforeach

				</tbody>


			</table>
		</div>
	</div>
</div>
@include('admin.layout.footer')