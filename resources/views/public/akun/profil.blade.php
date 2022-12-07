@extends('public.layout.app')
@section('title', 'Profil')
@section('content')

    <!-- Profil Start -->

    <section id="keunggulan" class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <h2 class="tw-text-xl tw-font-bold tw-text-black">Profil
                    </h2>
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap">
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg tablet:tw-flex">
                        <div class="tw-p-[104px]">
                            <img class="tw-mx-auto tw-rounded-lg" src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&color=fff&background=random'" alt="">
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-5 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                        <p class="tw-mt-3 tw-text-center tw-text-xl tw-font-extrabold tw-text-black">Data Akun</p>
                        <div class="tw-px-6 tw-pt-8 tw-pb-2">
                            <div>
                                <p class="tw-mb-1 tw-block tw-truncate tw-text-left tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">
                                    Nama
                                </p>
                                <p class="tw-mb-3 tw-text-left tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                    {{ auth()->user()->name }}</p>
                            </div>
                            <div>
                                <p class="tw-mb-1 tw-block tw-truncate tw-text-left tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">
                                    No. WhatsApp
                                </p>
                                <p class="tw-mb-3 tw-text-left tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                    {{ auth()->user()->notelpon }}</p>
                            </div>
                            <div>
                                <p class="tw-mb-1 tw-block tw-truncate tw-text-left tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">
                                    Email
                                </p>
                                <p class="tw-mb-6 tw-text-left tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                    {{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-5 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                        <p class="tw-mt-3 tw-text-center tw-text-xl tw-font-extrabold tw-text-black">Pengaturan Akun</p>
                        <div class="tw-p-[75px]">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="tw-mx-auto tw-mb-6 tw-w-full">
                                    <button type="submit" class="tw-w-full tw-rounded-lg tw-border-2 tw-border-black tw-bg-white tw-p-3 tw-text-center tw-text-lg tw-font-extrabold tw-tracking-normal">
                                        <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Keluar Akun') }}
                                        </a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil End -->
    {{-- <div class="tw-container tw-mx-auto tw-mt-12">
        <div class="tw-mx-3">
            <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-shadow-md">
                <img src="assets/img/icon1/profile.png" class="tw-mx-auto tw-mb-1 tw-pt-2" style="width: 90px;">

                <div class="tw-mx-auto">
                    <div class="tw-flex tw-flex-row">
                        <img src="assets/img/icon1/profile.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                        <span class="tw-font-poppins tw-mt-2 tw-ml-1 tw-text-center tw-text-sm">{{ Auth::user()->name }}</span>
                    </div>
                </div>
                <div class="tw-mx-auto">
                    <div class="tw-flex tw-flex-row">
                        <img src="assets/img/icon1/telephone.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                        <span class="tw-font-poppins tw-mt-2 tw-ml-1 tw-text-center tw-text-sm">{{ Auth::user()->notelpon }}</span>
                    </div>
                </div>
                <div class="tw-mx-auto">
                    <div class="tw-flex tw-flex-row">
                        <img src="assets/img/icon1/at.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                        <span class="tw-font-poppins tw-mt-2 tw-ml-1 tw-text-center tw-text-sm">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <div class="tw-container tw-mx-auto tw-mb-5 tw-mt-5">
                    <div class="tw-mx-auto tw-flex tw-flex-wrap">
                        <div class="tw-mx-16 tw-flex">
                            <!-- <div class="tw-mx-3 tw-mt-1">
                                                                                                                                            <button type="submit" class="tw-bg-orange-400 dark:tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-sm tw-font-medium tw-text-white tw-no-underline hover:tw-bg-[#ff7f00] dark:hover:tw-bg-[#ff7f00]">Edit Profil</button>
                                                                                                                                        </div> -->
                            <div class="tw-mx-3 tw-mt-1 tw-text-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="tw-bg-orange-400 dark:tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-sm tw-font-medium tw-text-white tw-no-underline hover:tw-bg-[#ff7f00] dark:hover:tw-bg-[#ff7f00]"><a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Keluar Akun') }}
                                        </a></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tw-container tw-mx-auto tw-mb-5 tw-mt-5">
                                                                                                                                <div class="tw-mx-16 tw-flex tw-flex-wrap">
                                                                                                                                    <div class="tw-flex">
                                                                                                                                        <div class="tw-mx-3">
                                                                                                                                            <button type="submit" class="tw-bg-orange-400 dark:tw-bg-orange-400 tw-w-full tw-rounded-lg tw-px-3 tw-py-2 tw-text-center tw-text-sm tw-font-medium tw-text-white tw-no-underline hover:tw-bg-[#ff7f00] dark:hover:tw-bg-[#ff7f00]">Edit Profil</button>
                                                                                                                                        </div>
                                                                                                                                        <div class="tw-mx-3 tw-mt-1">

                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div> -->
                <!-- <div class="tw-mt-3 tw-flex tw-flex-wrap">
                                                                                                                                <div class="tw-mx-auto tw-flex">
                                                                                                                                    <div class="tw-font-poppins tw-mx-auto tw-my-1 tw-mr-[10%] tw-rounded-md tw-border tw-border-gray-600 tw-bg-white tw-p-3 tw-text-sm">
                                                                                                                                        <a href="{{ url('/') }}" class="tw-no-underline" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-p-1 tw-text-sm tw-text-red-500">
                                                                                                                                                Edit Profil
                                                                                                                                            </span>
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                    <div class="tw-mx-auto tw-my-1 tw-rounded-md tw-border tw-border-gray-600 tw-bg-white tw-px-5">
                                                                                                                                        <form method="POST" action="{{ route('logout') }}">
                                                                                                                                            @csrf

                                                                                                                                            <a class="tw-cursor-pointer" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                                                                                                                {{ __('Keluar Akun') }}
                                                                                                                                            </a>
                                                                                                                                        </form>
                                                                                                                                        <a href="{{ url('/') }}" class="tw-no-underline" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-p-1 tw-text-sm tw-text-red-500">
                                                                                                                                                Keluar Akun
                                                                                                                                            </span>
                                                                                                                                        </a>
                                                                                                                                        <span class="tw-font-poppins tw-m-auto tw-text-center tw-text-sm tw-text-red-500">Pesanan</span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="tw-mx-auto tw-mr-[10%] tw-text-center md:tw-mx-auto md:tw-mr-[46%] md:tw-text-center">

                                                                                                                                </div>
                                                                                                                            </div> -->
                <div class="">
                    <p class="tw-font-poppins tw-my-1 tw-mt-1 tw-mb-3 tw-px-3 tw-text-sm"></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
