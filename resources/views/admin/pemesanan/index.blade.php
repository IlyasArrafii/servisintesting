@extends('admin.layout.main')
@section('judul', 'Layanan')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Layanan</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
						<li class="breadcrumb-item active">Data Layanan</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				@if(session()->get('SessionJabatan') != 1)
				<div class="col-md-9">
					<a href="{{url('/admin/layanan/tambah')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Layanan </a>
				</div>
				<div class="col-md-3">
				</div>
				@endif
			</div>
			<br>
			<!-- ./col -->
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data Layanan</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th scope="col">Kode Pemesanan</th>
								<th scope="col">Nama Lengkap</th>
								<th scope="col">No.Whatsapp</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($pemesanan as $item)
							@if($item->status == 1 OR $item->status == 2 OR $item->status == 3 OR $item->status == 4 OR $item->status == 5 OR $item->status == 6 OR $item->status == 7)
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
									@elseif($item->status == 4)
									<a href="{{url('/pesanan-selesai/'.$item->id.'')}}" class="btn btn-success">Pesanan Selesai</a>
									@elseif($item->status == 6)
									<a href="{{url('/komplain-selesai/'.$item->id.'')}}" class="btn btn-success">Komplain Selesai</a>
									@endif
									<a href="{{url('/detail-pesanan/'.$item->id.'')}}" class="btn btn-secondary">Detail Pesanan</a>
									<a href="{{url('/batal-pesanan/'.$item->id.'')}}" class="btn btn-danger">Batalkan Pesanan</a>
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<script text="text/javascript">
	$(".confirm").on('click', function(e) {
		id = e.target.dataset.id;
		Swal.fire({
				title: 'Yakin akan menghapus ?',
				text: 'Data akan dihapus permanen!',
				icon: 'warning',
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$(`#delete${id}`).submit();
				} else {

				}
			});
	});
</script>
@endsection