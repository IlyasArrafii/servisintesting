@extends('public.layout.app')
@section('title', 'Syarat Pemesanan')
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
                    <span class="tw-font-poppins tw-m-auto tw-text-center tw-text-white">Pesanan</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Ketentuan Start -->
    <section id="artikel" class="tw-min-h-screen tw-w-full tw-bg-white tw-pt-6 tw-pb-16">
        @foreach ($pemesanan as $item)
            <form action="{{ url('/checkout') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <div class="tw-container tw-mx-auto">
                    <div class="tw-w-full tw-px-4">
                        <div class="tw-mx-auto tw-max-w-xl tw-text-center">
                            <h2 class="tw-font-poppins tw-text-2xl tw-font-bold lg:tw-text-3xl xl:tw-text-3xl">Ketentuan
                                Pelayanan
                            </h2>
                        </div>
                    </div>
                    <div class="tw-mx-auto tw-px-4 sm:tw-pt-[20px] lg:tw-pt-[50px] xl:tw-pt-[50px] mobile:tw-pt-[17px] tablet:tw-pt-[20px]">
                        <div class="tw-rounded-lg tw-bg-white tw-p-[35px] tw-shadow-lg sm:tw-mx-8 sm:tw-p-[23px] md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto mobile:tw-p-[11px] tablet:tw-p-[23px]">
                            <article class="tw-font-poppins tw-prose-sm tw-w-full tw-text-left lg:tw-prose-base xl:tw-prose-base">
                                {!! $item->Layanan['syarat'] !!}</article>
                        </div>
                    </div>
                    <div class="tw-px-4 tw-py-8 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                        <p class="tw-font-poppins tw-text-sm lg:tw-text-lg xl:tw-text-lg">Dengan mengklik
                            tombol pesan, anda telah menyetuji syarat dan ketentuan kami</p>
                    </div>
                    <div class="tw-flex tw-justify-between tw-px-4 tw-pb-6 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto mobile:tw-flex-col mobile:tw-space-y-4">
                        <div class="tw-mx-auto tw-w-full xl:tw-px-1 mobile:tw-px-1 tablet:tw-px-1">
                            <button type="submit" class="tw-font-poppins tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-bold tw-tracking-wide tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-1">Pesan
                                Sekarang</button>
                        </div>
                        <div class="tw-mx-auto tw-w-full xl:tw-px-1 mobile:tw-px-1 tablet:tw-px-1">

                            <a href="{{ url('/batal-pemesanan/' . $item->id . '') }}" type="submit" class="tw-font-poppins tw-w-full tw-rounded-lg tw-bg-[#D9D9D9] tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-bold tw-tracking-wide tw-text-black hover:tw-bg-[#D9D9D9]/90 focus:tw-outline-none focus:tw-ring-1">Batalkan
                                Pemesanan</a>

                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </section>
    <!-- Ketentuan End -->


    {{-- @foreach ($pemesanan as $item)
        <form action="{{ url('/checkout') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $item->id }}">

            <div class="tw-container tw-mx-auto tw-mt-5">
                <div class="tw-mx-3">
                    <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                        <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-base tw-font-extrabold">Ketentuan Pelayanan</p>
                        <div class="tw-font-poppins tw-my-1 tw-mb-3 tw-px-3 tw-pt-3 tw-text-justify tw-text-sm tw-font-extrabold">
                            <p>{!! $item->Layanan['syarat'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tw-container tw-mx-auto">
                <div class="tw-mb-10 tw-p-3">
                    <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-sm">
                        <p class="tw-font-poppins tw-mt-2 tw-mb-3 tw-px-3 tw-pt-3 tw-text-justify tw-text-sm">Dengan mengklik tombol pesan, anda telah menyetuji syarat dan ketentuan kami</p>
                    </div>
                </div>
            </div>

            <div class="tw-container tw-mx-auto tw-mb-5">
                <div class="tw-flex tw-flex-wrap">
                    <div class="tw-flex">
                        <div class="tw-mx-3">
                            <button type="submit" class="tw-bg-orange-400 dark:tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-base tw-font-medium tw-text-white tw-no-underline hover:tw-bg-[#ff7f00] dark:hover:tw-bg-[#ff7f00]">Pesan Sekarang</button>
                        </div>
                        <div class="tw-mx-3">
                            <a href="{{ url('/batal-pemesanan/' . $item->id . '') }}" type="submit" class="tw-bg-orange-400 dark:tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-base tw-font-medium tw-text-white tw-no-underline hover:tw-bg-[#ff7f00] dark:hover:tw-bg-[#ff7f00]">Batalkan Pemesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
    <br>
    <br>
    <br> --}}
@endsection
