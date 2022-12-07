@extends('public.layout.app')
@section('title', 'Detail Pemesanan')
@section('content')
    @include('public.layout.partials.nav')
    {{--
<div class="tw-container md:tw-max-w-full tw-bg-[#ff7f00] tw-px-0 tw-rounded-b-2xl" style="background-color: #ff7f00; padding-top: 5%;">
    <div class="tw-flex tw-pb-2">
        <div class="tw-mx-auto tw-text-left tw-flex-1 tw-pl-3">
            <div class="tw-text tw-text-white tw-font-poppins tw-mb-3">
                <a href="{{url('/')}}" class="tw-no-underline hover:tw-text-white" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-text-sm tw-p-1">
                        Kembali
                    </span>
                </a>
            </div>

        </div>
        <div class="tw-text-center tw-mx-auto tw-mr-[40%] md:tw-mx-auto md:tw-mr-[48%] md:tw-text-center">
            <div class="tw-text-center tw-mx-auto">
                <span class="tw-m-auto tw-text-center tw-text-white tw-font-poppins">Pesanan</span>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Profil Start -->
    <section class="tw-font-poppins tw-pb-16">

        <div class="tw-container tw-mx-auto tw-mt-12">
            @foreach ($pemesanan as $valuesPemesanan)
                <div class="tw-mx-3">
                    <div class="tw-w-full tw-px-4">
                        <div class="tw-mx-auto tw-max-w-xl tw-text-center">
                            <p class="tw-font-poppins tw-text-base tw-font-bold lg:tw-text-3xl xl:tw-text-3xl">Data
                                Pesanan
                            </p>
                        </div>
                    </div>


                    <!-- Start Rekomendasi Hasil -->
                    <div class="tw-mt-8 tw-w-full tw-rounded-lg tw-border tw-bg-white tw-p-4 tw-shadow-lg dark:tw-border-gray-700 dark:tw-bg-gray-800 sm:tw-p-8">

                        {{-- <div class="tw-mb-3 tw-flex tw-items-center tw-justify-between">
                            <p class="tw-text-base tw-font-bold tw-leading-none tw-tracking-wide tw-text-gray-900 dark:tw-text-white">
                                INVOICE
                            </p>
                        </div>
                        <p class="tw-mb-3 tw-text-base tw-font-bold tw-leading-none tw-tracking-wide tw-text-gray-900 dark:tw-text-white">
                            {{ $valuesPemesanan->kode_pemesanan }}
                        </p> --}}

                        <div class="tw-container tw-mx-auto">
                            <div class="tw-mt-1">
                                <p class="tw-text-sm tw-font-extrabold">Nama</p>
                                <p class="tw-text-sm">{{ $valuesPemesanan->name }}</p>
                            </div>
                            <div class="tw-mt-1">
                                <p class="tw-text-sm tw-font-extrabold">
                                    Alamat Rumah</p>
                                <p class="tw-text-sm">{{ $valuesPemesanan->detail_alamat . ', ' . $valuesPemesanan->alamat }}</p>
                            </div>
                            <div class="tw-mt-1">
                                <p class="tw-text-sm tw-font-extrabold">
                                    Nomor Telepon (Whatssapp)
                                </p>
                                <p class="tw-text-sm">{{ $valuesPemesanan->notelpon }}</p>
                            </div>
                            <div class="tw-mt-1">
                                <p class="tw-text-sm tw-font-extrabold">
                                    Layanan
                                </p>
                                <p class="tw-text-sm">{{ $valuesPemesanan->Layanan['nama_layanan'] }}</p>
                            </div>
                            <div class="tw-mt-1">
                                <p class="tw-text-sm tw-font-extrabold">
                                    Keluhan
                                </p>
                                <p class="tw-text-sm">{{ $valuesPemesanan->keluhan }}</p>
                            </div>
                            @if ($valuesPemesanan->status == '1')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-orange tw-bg-orange tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-mx-auto tw-w-[195px] tw-text-sm tw-text-white">
                                            Menunggu Konfirmasi Jasa
                                        </p>
                                    </div>
                                </div>
                            @elseif($valuesPemesanan->status == '2')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-green-500 tw-bg-green-400 tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-mx-auto tw-w-[60px] tw-text-sm tw-tracking-wide tw-text-white">
                                            Diterima
                                        </p>
                                    </div>
                                </div>
                            @elseif ($valuesPemesanan->status == '3')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-green-500 tw-bg-green-400 tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-mx-auto tw-w-[60px] tw-text-sm tw-text-white">
                                            Ditolak (Harap Pilih Penyedia Jasa Lain)
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="tw-mt-4 tw-p-3">
                    <a href="{{ url('/syarat-pemesanan/' . $valuesPemesanan->id . '') }}" type="submit" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange">Langkah Selanjutnya</a>
                </div>
            @endforeach
        </div>

        <!-- End Rekomendasi Hasil -->
    </section>
    <!-- Profil End -->

    {{-- @foreach ($pemesanan as $item)
        @if ($item->status == 0)
            <div class="tw-container tw-mx-auto tw-mt-5">
                <div class="tw-mx-3">
                    <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Data Pemesanan</p>
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Nama</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->name }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Alamat Lokasi</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->alamat }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Detail Alamat</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->detail_alamat }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Nomor Telepon (Whatssapp)</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-mb-3 tw-px-3 tw-text-sm">{{ $item->notelpon }}</p>
                    </div>
                </div>
            </div>

            <div class="tw-container tw-mx-auto">
                <div class="tw-mb-10 tw-p-3">
                    <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-sm">
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Detail Pesanan</p>
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-2 tw-text-sm tw-font-extrabold">Layanan</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->Layanan['nama_layanan'] }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Keluhan</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->keluhan }}</p>
                    </div>
                </div>
            </div>

            <div class="tw-container tw-mx-auto tw-mb-5">
                <div class="tw-mx-3 tw-w-full">
                    <a href="{{ url('/syarat-pemesanan/' . $item->id . '') }}" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange">Langkah Selanjutnya</a>
                </div>
            </div>
        @endif
    @endforeach --}}
@endsection
