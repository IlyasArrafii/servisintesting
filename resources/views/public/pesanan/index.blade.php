@extends('public.layout.app')
@section('title', 'Detail Pesanan')
@section('content')
    @include('public.layout.partials.nav')
    {{-- <div class="tw-container tw-rounded-b-2xl tw-bg-[#ff7f00] tw-px-0 md:tw-max-w-full" style="background-color: #ff7f00; padding-top: 5%;">
        <div class="tw-flex tw-pb-2">
            <div class="tw-mx-auto tw-flex-1 tw-pl-3 tw-text-left">
                <div class="tw-text tw-font-poppins tw-mb-3 tw-text-white">
                    <a href="{{ url('/') }}" class="tw-no-underline hover:tw-text-white" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-p-1 tw-text-sm">
                            Kembali
                        </span>
                    </a>
                </div>

            </div>
            <div class="tw-mx-auto tw-mr-[40%] tw-text-center md:tw-mx-auto md:tw-mr-[48%] md:tw-text-center">
                <div class="tw-mx-auto tw-text-center">
                    <span class="tw-font-poppins pages tw-m-auto tw-text-center tw-text-white">Pesanan</span>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Profil Start -->
    <section class="tw-font-poppins tw-pb-16">

        <div class="tw-container tw-mx-auto tw-mt-12">

            <div class="tw-mx-3">
                <div class="tw-w-full tw-px-4">
                    <div class="tw-mx-auto tw-max-w-xl tw-text-center">
                        <p class="tw-font-poppins tw-text-base tw-font-bold lg:tw-text-3xl xl:tw-text-3xl">Data
                            Pesanan
                        </p>
                    </div>
                </div>

                @foreach ($detaildata as $valuesPemesanan)
                    <!-- Start Rekomendasi Hasil -->
                    <div class="tw-mt-8 tw-w-full tw-rounded-lg tw-border tw-bg-white tw-p-4 tw-shadow-lg dark:tw-border-gray-700 dark:tw-bg-gray-800 sm:tw-p-8">

                        <div class="tw-mb-3 tw-flex tw-items-center tw-justify-between">
                            <p class="tw-text-base tw-font-bold tw-leading-none tw-tracking-wide tw-text-gray-900 dark:tw-text-white">
                                INVOICE
                            </p>
                        </div>
                        <p class="tw-mb-3 tw-text-base tw-font-bold tw-leading-none tw-tracking-wide tw-text-gray-900 dark:tw-text-white">
                            {{ $valuesPemesanan->kode_pemesanan }}
                        </p>

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
                                    <div class="tw-w-min tw-rounded-xl tw-border-red-600 tw-bg-red-600 tw-p-2 tw-text-sm tw-text-white">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-sm tw-text-white">
                                            Menunggu Konfirmasi
                                        </p>
                                    </div>
                                </div>
                            @elseif($valuesPemesanan->status == '2')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-blue-500 tw-bg-blue-500 tw-p-2 tw-text-sm tw-text-white">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm tw-tracking-wide tw-text-white">
                                            Diterima
                                        </p>
                                    </div>
                                </div>
                            @elseif ($valuesPemesanan->status == '3')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-orange tw-bg-orange tw-p-2 tw-text-sm tw-text-white">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm">
                                            Mencari Teknisi
                                        </p>
                                    </div>
                                </div>
                            @elseif ($valuesPemesanan->status == '4')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-[#22C55E] tw-bg-[#22C55E] tw-p-2 tw-text-sm tw-text-white">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm">
                                            Teknisi Datang
                                        </p>
                                    </div>
                                </div>
                            @elseif($valuesPemesanan->status == '5')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-[#22C55E] tw-bg-[#22C55E] tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm tw-text-white">
                                            Pesanan Selesai
                                        </p>
                                    </div>
                                </div>
                            @elseif($valuesPemesanan->status == '6')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-red-600 tw-bg-red-600 tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm tw-text-white">
                                            Pesanan Dikomplain
                                        </p>
                                    </div>
                                </div>
                            @elseif ($valuesPemesanan->status == '7')
                                <div class="tw-mt-1">
                                    <p class="tw-text-sm tw-font-extrabold">
                                        Status
                                    </p>
                                    <div class="tw-w-min tw-rounded-xl tw-border-[#22C55E] tw-bg-[#22C55E] tw-p-2 tw-text-sm tw-text-red-500">
                                        <p class="tw-w-[165px] tw-px-1 tw-text-center tw-text-sm tw-text-white">
                                            Komplain Selesai
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>
        </div>

        <!-- End Rekomendasi Hasil -->
    </section>
    <!-- Profil End -->

    {{-- <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-max-w-full tw-text-center">
            <span class="tw-font-poppins tw-mx-auto tw-text-center tw-font-bold">Data Pesanan</span>
        </div>
        @foreach ($detaildata as $item)
            @if ($item->status < 1)
                <div class="tw-mt-5 tw-text-center">
                    <span class="tw-font-poppins tw-mx-auto tw-text-center tw-text-base">{{ $text }}</span>
                </div>
            @endif
            @if ($item->status > 0)
                <div class="tw-p-3">
                    <div class="tw tw-mt-1 tw-flex tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                        <p class="tw-font-poppins tw-my-1 tw-flex-1 tw-p-3 tw-px-1 tw-text-sm">{{ $item->kode_pemesanan }}</p>
                        @if ($item->status == '1')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-red-500">Menunggu Konfirmasi</p>
                            </div>
                        @elseif($item->status == '2')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-blue-500">Konfirmasi Diterima</p>
                            </div>
                        @elseif($item->status == '3')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-[#FA592B]">Mencari Teknisi</p>
                            </div>
                        @elseif($item->status == '4')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-green-500">Teknisi Datang</p>
                            </div>
                        @elseif($item->status == '5')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-green-500">Pesanan Selesai</p>
                            </div>
                        @elseif($item->status == '6')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-red-500">Pesanan Dikomplain</p>
                            </div>
                        @elseif($item->status == '7')
                            <div class="tw-mt-2">
                                <p class="tw-font-poppins tw-my-1 tw-mr-1 tw-rounded-xl tw-border-[#FFF0B3] tw-bg-[#FFF0B3] tw-p-1 tw-px-3 tw-text-xs tw-text-green-500">Komplain Selesai</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tw-mx-3">
                    <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-md">
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Data Pemesanan</p>
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Nama Pesanan</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->name }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Alamat Pemesan</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->alamat }}</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Nomor Telepon</p>
                        <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-mb-3 tw-px-3 tw-text-sm">{{ $item->notelpon }}</p>
                    </div>
                </div>

    </div>

    <div class="tw-container tw-mx-auto">
        <div class="tw-mb-10 tw-p-3">
            <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-sm">
                <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-sm tw-font-extrabold">Data Layanan</p>
                <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-2 tw-text-sm tw-font-extrabold">Layanan</p>
                <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->Layanan['nama_layanan'] }}</p>
                <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-px-3 tw-text-sm tw-font-extrabold">Keluhan</p>
                <p class="tw-font-poppins tw-mb-3 tw-mt-1 tw-px-3 tw-text-sm">{{ $item->keluhan }}</p>
                @if ($item->status == 5)
                    <div class="tw-container tw-mx-auto tw-mt-1 tw-mb-3">
                        <div class="tw-mx-3">
                            <a href="{{ url('/komplain/' . $item->id . '') }}" class="tw-text-white tw-no-underline">
                                <button type="submit" class="tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-base tw-font-medium tw-text-white" target="_blank">Ajukan Complain</button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endif
    @endforeach --}}
@endsection
