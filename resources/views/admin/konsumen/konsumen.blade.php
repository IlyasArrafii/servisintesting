@include('admin.layout.header')

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Konsumen</h1>
		</div>
	</section>

	<div class="card">
		<div class="table-responsive">
			<table id="example1" class="table table-striped table-md">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Email</th>
						<th>No. Whatsapp</th>
					</tr>
				</thead>
				<tbody>
					@foreach($konsumen as $item)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->notelpon}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@include('admin.layout.footer')