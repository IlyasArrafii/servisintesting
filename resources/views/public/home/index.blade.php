@include('public.layout.header')
<!-- AKHIR NAVBAR -->

<span class="pages d-none">beranda</span>
<div class="tw-container md:tw-max-w-full jumbotron jumbotron-fluid kotak" style="background-image: url('assets/img/kotak.png');">
	<div class="container">
		<div class="row">
			<div class="col-8 justify-content-left">
				<p class="text-suvis">Servisin<br> <span class="text-tanggal">{{$today}}</span></p>
				@if(isset(Auth::user()->name))
				<p class="tw-text-sm tw-text-white">Hi, {{ Auth::user()->name }}!</p>
				@endif
			</div>
			<div class="col-4 justify-content-right text-right">
				<a href="">
					<i class="fa fa-bell bell"></i>
				</a>
			</div>
		</div>

		<div class=" info-promo">
			<div class=" card-promo owl-carousel owl-theme">
				<div class="item">
					<img class="card-img" src="assets/img/info_promo/promo.png" alt="Card image">
				</div>
				<div class="item">
					<img class="card-img" src="assets/img/slide/psby1.png" alt="Card image">
				</div>
			</div>
		</div>

	</div>
</div>



<!-- AKHIR CAROUSEL -->


<!-- PANEL PRODUK  -->
<div class="tw-container tw-mx-auto tw-my-3">
	<div class="tw-flex tw-mb-3">
		<div class="tw-flex-1 tw-mx-3">
			<span class="tops font-weight-bold">Layanan Servis</span>
		</div>
		<div class="tw-justify-end tw-mx-3">
			<a href="" class="tops font-all">Lihat Semua</a>
		</div>
	</div>

	<div class="tw-container tw-mx-auto">
		<div class="tw-grid tw-grid-cols-4 tw-mx-1 tw-content-center">
			@foreach($layanan as $item)
			@if(isset(Auth::user()->id))
			<div class="tw-mx-2 tw-mb-2 tw-mt-3">
				<a href="{{url('/pemesanan/'.$item->slug.'')}}">
					<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
						<img src="{{ asset('storage/'.$item->icon.'')}}" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
						<p class="tw-text-sm tw-text-center tw-text-poppins tw-mb-1">{{$item->nama_layanan}}</p>
					</div>
				</a>
			</div>
			@else
			<div class="tw-mx-2 tw-mb-2 tw-mt-3">
				<a href="{{url('/login')}}">
					<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
						<img src="{{ asset('storage/'.$item->icon.'')}}" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
						<p class="tw-text-sm tw-text-center tw-text-poppins tw-mb-1">{{$item->nama_layanan}}</p>
					</div>
				</a>
			</div>
			@endif
			@endforeach
		</div>


		<!-- <div class="tw-columns-4 tw-mx-3 tw-mt-3 justify-content-center">
			<a href="">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon/tv.png" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
					<p class="p-tittle text-center">TV</p>
				</div>
			</a>

			<a href="">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon/multic.png" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
					<p class="p-tittle text-center">Magic Jar</p>
				</div>
			</a>

			<a href="">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon/mc.png" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
					<p class="p-tittle text-center">Microwave</p>
				</div>
			</a>

			<a href="lainnya.php">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon/pump.png" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 44px;">
					<p class="p-tittle text-center">Pompa Air</p>
				</div>
			</a>

		</div> -->
	</div>
</div>


<!-- MODAL -->


<!-- INFO DAN PROMO  -->

<div class="tw-container tw-mx-auto tw-my-3">
	<div class="tw-flex tw-flex-wrap tw-my-auto tw-mx-auto tw-text-xs tw-text-center">
		<div class="tw-flex tw-gap-1">
			<div class="tw-mx-3">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<p class="tw-my-1 tw-mx-1 tw-text-xs">Cara Memesan Layanan Servisin</p>
					<a href="{{url('/cara-pemesanan')}}">
						<img src="assets/img/icon/information.png" class="tw-mx-auto tw-py-2" style="width: 70px;">
					</a>
				</div>
			</div>
			<div class="tw-mx-3">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<p class="tw-my-1 tw-mx-5 tw-text-xs">Apa Keunggulan Servisin ?</p>
					<a href="{{url('/keunggulan')}}">
						<img src="assets/img/icon/excellence.png" class="tw-mx-auto tw-py-2" style="width: 70px;">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tw-container tw-mx-auto tw-my-3">
	<span class="tw-font-[Poppins] tw-mx-auto tw-p-3 text-about font-weight-bold" style="margin-bottom: 10px;">Ketahui Tentang Kami</span>
	<div class="tw-container tw-mx-auto">
		<div class="tw-p-3 tw-mb-5">
			<div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1">
				<p class="tw-px-5 tw-pt-3 tw-font-poppins tw-text-xl">Servisin</p>
				<p class="tw-px-5 tw-font-poppins tw-text-xs">#solusiterbaikhomeservice</p>
				<p class="tw-px-5 tw-font-poppins tw-text-xs tw-text-justify tw-pt-2">Kami adalah Startup yang bertujuan untuk melayani layanan home service perbaikan perabot elektronik rumah tangga. Servisin menghubungkan antara konsumen dan teknisi di berbagai lokasi dengan berbagai macam layanan yang tersedia.</p>
				<p class="tw-px-5 tw-font-bold tw-text-right tw-font-poppins tw-text-xs tw-mt-1 tw-mb-3">Selengkapnya</p>
			</div>
		</div>
	</div>
</div>
<!-- AKHIR INFO DAN PROMO -->

<div class="tw-container tw-mx-auto">
	<div class="tw-flex tw-my-auto tw-mx-auto tw-text-xs tw-text-center">
		<div class="tw-mx-3 tw-flex-1 tw-mb-3">
			<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
				<img src="assets/img/icon1/teknisi.png" class="tw-mx-auto tw-py-2 tw-mb-2" style="width: 70px;">
				<p class="tw-my-1 tw-text-xl tw-font-bold tw-mx-1">10+</p>
				<p class="tw-mt-1 tw-mb-2 tw-font-bold tw-mx-1">Penyedia Jasa</p>
			</div>
		</div>
		<div class="tw-mx-3 tw-flex-1 tw-mb-3">
			<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
				<img src="assets/img/icon1/setting.png" class="tw-mx-auto tw-py-2 tw-mb-2" style="width: 70px;">
				<p class="tw-my-1 tw-text-xl tw-font-bold tw-mx-1">3</p>
				<p class="tw-mt-1 tw-mb-2 tw-font-bold tw-mx-1">Layanan</p>
			</div>
		</div>
	</div>

	<div class="tw-mx-auto">
		<div class="tw-flex tw-mx-auto tw-text-xs tw-text-center">
			<div class="tw-mx-3 tw-flex-1">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon1/note.png" class="tw-mx-auto tw-py-2" style="width: 70px;">
					<p class="tw-my-1 tw-text-lg tw-font-bold tw-mx-1">100</p>
					<p class="tw-mt-1 tw-mb-2 tw-font-bold tw-mx-1">Pekerjaan Selesai</p>
				</div>
			</div>
			<div class="tw-mx-3 tw-mr-3 tw-ml-2 tw-flex-1">
				<div class="tw-border tw-rounded-lg tw-border-[#fff] tw-bg-[#fff]">
					<img src="assets/img/icon1/youth.png" class="tw-mx-auto tw-py-2" style="width: 70px;">
					<p class="tw-my-1 tw-text-lg tw-font-bold tw-mx-1">50</p>
					<p class="tw-mt-1 tw-mb-2 tw-font-bold tw-mx-1">Konsumen Puas</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TESTIMONI -->
<div class="tw-container md:tw-max-w-full lg:tw-max-w-full md:tw-p-3 tw-mt-5">
	<div class="tw-mx-auto tw-p-3">
		<div class="tw-bg-[#ff7f00] tw-rounded-3xl tw-px-4 tw-pt-4">
			<p class="tw-mt-1 tw-mb-3 tw-p-1 tw-text-center tw-text-sm font-weight-bold">Review Konsumen</p>
			<div class="card-promo owl-carousel owl-theme tw-flex">
				<div class="item tw-flex-1">
					<div class="pull-right">
						<img src="assets/img/konsumen/1.jpg" class="photo_testi">
						<p class="nama_konsumen">Rafy Akbar</p>
					</div>
					<p class="text-left">Suvis Indonesia memang sangat membantu ketika barang elektronik saya bermasalah.</p>
				</div>

				<div class="item">
					<div class="pull-right">
						<img src="assets/img/konsumen/1.jpg" class="photo_testi">
						<p class="nama_konsumen">Rafy Akbar</p>
					</div>
					<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
				</div>
				<div class="item">
					<img src="assets/img/konsumen/1.jpg" class="photo_testi mx-auto d-block">
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- AKHIR TESTIMONI -->


<!-- PENDAFATARAN TEKNISI -->
<div class="tw-container md:tw-max-w-full tw-my-3 pendaftaran md:tw-p-3">
	<div class="tw-mx-auto tw-px-3">
		<span class="tops">Penyedia Jasa</span>
	</div>
	<div class="tw-mx-auto tw-px-3">
		<div class="tw-p-3 tw-my-4 tw-rounded-lg tw-bg-white tw-font-poppins"> <span class="tops
		font-weight-bold">Bergabunglah Bersama Kami</span>
			<p class="text-left">Dapatkan berbagai keuntungan menjadi mitra Penyedia Jasa di
				Servisin!</p>
			<a href="https://bit.ly/mitraservisin" class="btn btn-daftar">Daftar Mitra!</a>
		</div>
	</div>
</div>
<script>
	var tw = new Date();
	if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
	else(a = tw.getTime());
	tw.setTime(a);
	var tahun = tw.getFullYear();
	var hari = tw.getDay();
	var bulan = tw.getMonth();
	var tanggal = tw.getDate();
	var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
	var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
	document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
</script>
<!-- AKHIR PENDAFATARAN -->
@include('public.home.footer')