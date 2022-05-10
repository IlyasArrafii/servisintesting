@include('admin.layout.header')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Pemesanan</h1>
		</div>
	</section>
	<div class="card">
		<div class="table-responsive">
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped table-md">
					<thead>
						<tr>
							<th scope="col">Kode Pemesanan</th>
							<th scope="col">Nama Lengkap</th>
							<th scope="col">No.Whatsapp</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					@foreach($pemesanan as $item)
					@if($item->status == 1 OR $item->status == 2 OR $item->status == 3 OR $item->status == 4)
					<tbody>
						<tr>
							<td>{{$item->kode_pemesanan}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->notelpon}}</td>
							<td>
								@if($item->status == 1)
								<a href="{{url('/konfirmasi-pesanan/'.$item->id.'')}}" target="_blank" class="btn btn-primary">Konfirmasi</a>
								@elseif($item->status == 2)
								<a href="{{url('/mencari-teknisi/'.$item->id.'')}}" class="btn btn-warning">Mencari Teknisi</a>
								@elseif($item->status == 3)
								<a href="{{url('/teknisi-datang/'.$item->id.'')}}" class="btn btn-success">Teknisi Datang</a>
								@endif
								<a href="{{url('/detail-pesanan/'.$item->id.'')}}" class="btn btn-secondary">Detail Pesanan</a>
								<a href="{{url('/batal-pesanan/'.$item->id.'')}}" class="btn btn-danger">Batalkan Pesanan</a>
							</td>
						</tr>
					</tbody>
					@endif
					@endforeach
				</table>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
	<!-- <div class="card">
		<div class="table-responsive">
			<div class="card-body">
				<table id="example1" class="table table-striped table-md">
					<thead>
						<tr>
							<th scope="col">Kode Pemesanan</th>
							<th scope="col">Nama Lengkap</th>
							<th scope="col">No.Whatsapp</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					@foreach($pemesanan as $item)
					@if($item->status == 1 OR $item->status == 2 OR $item->status == 3 OR $item->status == 4)
					<tbody>
						<tr>
							<td>{{$item->kode_pemesanan}}</td>
							<td>{{$item->name}}</td>
							<td>{{$item->notelpon}}</td>
							<td>
								@if($item->status == 1)
								<a href="{{url('/konfirmasi-pesanan/'.$item->id.'')}}" target="_blank" class="btn btn-primary">Konfirmasi</a>
								@elseif($item->status == 2)
								<a href="{{url('/mencari-teknisi/'.$item->id.'')}}" class="btn btn-warning">Mencari Teknisi</a>
								@elseif($item->status == 3)
								<a href="{{url('/teknisi-datang/'.$item->id.'')}}" class="btn btn-success">Teknisi Datang</a>
								@endif
								<a href="{{url('/detail-pesanan/'.$item->id.'')}}" class="btn btn-secondary">Detail Pesanan</a>
								<a href="{{url('/batal-pesanan/'.$item->id.'')}}" class="btn btn-danger">Batalkan Pesanan</a>
							</td>
						</tr>
					</tbody>
					@endif
					@endforeach


				</table>
			</div>
		</div>
	</div> -->
</div>
@include('admin.layout.footer')