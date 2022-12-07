@extends('public.layout.app')
@section('title', 'Servisin | Home')
@section('content')
    <!-- Home Start -->
    <section class="tw-max-h-screen tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11 xl:tw-pt-6 mobile:tw-pt-[20px] mobile:tw-pb-[40px]">
        <div class="tw-font-poppins tw-container tw-mx-auto tw-h-full">
            <div class="tw-w-full tw-px-4 tw-py-4">
                <div class="tw-grid tw-grid-cols-1 tw-gap-8 sm:tw-mx-8 sm:tw-gap-0 lg:tw-mx-auto lg:tw-grid-cols-2 lg:tw-gap-16 xl:tw-mx-auto tablet:tw-mx-24 tablet:tw-gap-0">
                    <div class="mobile:tw-hidden">
                        <h2 class="tw-text-xl tw-font-bold sm:tw-text-center sm:tw-text-base md:tw-text-base lg:tw-text-left xl:tw-text-left xl:tw-text-2xl tablet:tw-text-center">
                            CARA
                            MUDAH
                            DAN ANDAL UNTUK
                            MEMPERBAIKI
                            PERABOT ELEKTRONIK RUMAH TANGGA ANDA</h2>
                        <p class="tw-mt-4 tw-text-lg sm:tw-text-center sm:tw-text-base md:tw-text-base lg:tw-text-left xl:tw-text-left tablet:tw-text-center">
                            Kami hadir
                            di
                            Surabaya
                            dan Sidoarjo</p>
                        <p class="tw-mt-4 tw-text-lg sm:tw-invisible sm:tw-text-base md:tw-text-base lg:tw-visible tablet:tw-invisible">
                            Senin - Jumat : 08.00 - 16.00 WIB <br />
                            Sabtu - Minggu & Hari Besar Libur
                        </p>
                    </div>
                    <!-- Carousel Start -->
                    <div class="tw-relative tw-overflow-hidden tw-rounded-lg sm:tw-h-80 lg:tw-order-last lg:tw-h-full">
                        <div id="controls-carousel" class="tw-relative" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="tw-relative tw-mx-auto tw-h-56 tw-overflow-hidden tw-rounded-lg sm:tw-h-[241px] sm:tw-w-[568px] md:tw-h-96 lg:tw-h-[192px] lg:tw-w-[453px] xl:tw-h-[292px] xl:tw-w-[590px] mobile:tw-h-[165px] mobile:tw-w-full tablet:tw-h-[241px] tablet:tw-w-[568px]">
                                <!-- Item 1 -->
                                <div class="tw-absolute tw-inset-0 tw-z-10 -tw-translate-x-full tw-transform tw-transition-all tw-duration-700 tw-ease-in-out" data-carousel-item="1">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-block tw-w-full -tw-translate-x-1/2 -tw-translate-y-1/2" alt="..." />
                                </div>
                                <div class="tw-absolute tw-inset-0 tw-z-10 -tw-translate-x-full tw-transform tw-transition-all tw-duration-700 tw-ease-in-out" data-carousel-item="2">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-block tw-w-full -tw-translate-x-1/2 -tw-translate-y-1/2" alt="..." />
                                </div>
                                <div class="tw-absolute tw-inset-0 tw-z-10 -tw-translate-x-full tw-transform tw-transition-all tw-duration-700 tw-ease-in-out" data-carousel-item="3">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-block tw-w-full -tw-translate-x-1/2 -tw-translate-y-1/2" alt="..." />
                                </div>
                                <div class="tw-absolute tw-inset-0 tw-z-10 -tw-translate-x-full tw-transform tw-transition-all tw-duration-700 tw-ease-in-out" data-carousel-item="4">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/044.webp" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-block tw-w-full -tw-translate-x-1/2 -tw-translate-y-1/2" alt="..." />
                                </div>
                                <div class="tw-absolute tw-inset-0 tw-z-10 -tw-translate-x-full tw-transform tw-transition-all tw-duration-700 tw-ease-in-out" data-carousel-item="5">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/045.webp" class="tw-absolute tw-top-1/2 tw-left-1/2 tw-block tw-w-full -tw-translate-x-1/2 -tw-translate-y-1/2" alt="..." />
                                </div>
                            </div>
                            <!-- Slider controls -->

                            <button type="button" class="tw-group tw-absolute tw-top-0 tw-left-0 tw-z-30 tw-flex tw-h-full tw-cursor-pointer tw-items-center tw-justify-center tw-px-4 focus:tw-outline-none sm:tw-left-5 tablet:tw-left-5" data-carousel-prev>
                                <span class="tw-inline-flex tw-h-10 tw-w-10 tw-items-center tw-justify-center tw-rounded-full tw-bg-white/30 group-hover:tw-bg-white/50 group-focus:tw-outline-none group-focus:tw-ring-4 group-focus:tw-ring-white dark:tw-bg-gray-800/30 dark:group-hover:tw-bg-gray-800/60 dark:group-focus:tw-ring-gray-800/70">
                                    <svg aria-hidden="true" class="tw-h-6 tw-w-6 tw-text-white dark:tw-text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                    <span class="tw-sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="tw-group tw-absolute tw-top-0 tw-right-0 tw-z-30 tw-flex tw-h-full tw-cursor-pointer tw-items-center tw-justify-center tw-px-4 focus:tw-outline-none sm:tw-right-5 tablet:tw-right-5" data-carousel-next>
                                <span class="tw-inline-flex tw-h-10 tw-w-10 tw-items-center tw-justify-center tw-rounded-full tw-bg-white/30 group-hover:tw-bg-white/50 group-focus:tw-outline-none group-focus:tw-ring-4 group-focus:tw-ring-white dark:tw-bg-gray-800/30 dark:group-hover:tw-bg-gray-800/60 dark:group-focus:tw-ring-gray-800/70">
                                    <svg aria-hidden="true" class="tw-h-6 tw-w-6 tw-text-white dark:tw-text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span class="tw-sr-only">Next</span>
                                </span>
                            </button>

                        </div>
                    </div>
                    <!-- Carousel End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Home End -->

    <!-- View Layanan End -->
    <section id="layanan" class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11 mobile:tw-pt-0">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-flex tw-justify-between tw-pb-5">
                    <div class="tablet:tw-mx-24">
                        <p class="tw-text-base tw-font-semibold tw-text-black sm:tw-order-first sm:tw-mt-0 sm:tw-text-lg lg:tw-text-lg xl:tw-text-base tablet:tw-text-lg">
                            Layanan Servis
                        </p>
                    </div>
                    <div class="sm:tw-invisible lg:tw-invisible xl:tw-invisible mobile:tw-invisible tablet:tw-invisible tablet:tw-mx-24">
                        <a href="#" class="tw-text-right tw-text-base tw-text-black mobile:tw-text-sm">
                            Lihat Layanan
                        </a>
                    </div>
                </div>
            </div>
            <div class="tw-mx-2 sm:tw-grid sm:tw-grid-cols-3 lg:tw-grid lg:tw-grid-cols-6 xl:tw-grid xl:tw-grid-cols-6 mobile:tw-grid mobile:tw-grid-cols-3 tablet:tw-mx-24 tablet:tw-grid tablet:tw-grid-cols-3">
                @foreach ($layanan as $items)
                    @if (isset(Auth::user()->id))
                        <div class="tw-mx-2 tw-mb-2 tw-mt-3">
                            <a href="{{ url('/pemesanan/' . $items->slug . '') }}">
                                <div class="tw-rounded-lg tw-border tw-border-[#fff] tw-bg-[#fff]">
                                    <img src="{{ asset('storage/' . $items->icon . '') }}" class="tw-mx-auto tw-mb-4 tw-h-20 tw-w-20 tw-pt-4 mobile:tw-h-16 mobile:tw-w-14 tablet:tw-h-20 tablet:tw-w-20">
                                    <p class="tw-mb-4 tw-text-center tw-text-xs tw-text-black sm:tw-text-base lg:tw-text-base xl:tw-text-base tablet:tw-text-base">
                                        {{ $items->nama_layanan }}</p>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="tw-mx-2 tw-mb-2 tw-mt-3">
                            <a href="{{ url('/login') }}">
                                <div class="tw-rounded-lg tw-border tw-border-[#fff] tw-bg-[#fff]">
                                    <img src="{{ asset('storage/' . $items->icon . '') }}" class="tw-mx-auto tw-mb-4 tw-h-20 tw-w-20 tw-pt-4 mobile:tw-h-16 mobile:tw-w-14 tablet:tw-h-20 tablet:tw-w-20">
                                    <p class="tw-mb-4 tw-text-center tw-text-xs tw-text-black sm:tw-text-base lg:tw-text-base xl:tw-text-base tablet:tw-text-base">
                                        {{ $items->nama_layanan }}</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- View Layanan End -->

    <!-- Cara Memesan Start -->
    <section id="memesan" class="tw-w-full tw-bg-white tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <h2 class="tw-text-xl tw-font-bold tw-text-black">
                        Cara Memesan Layanan
                        <span class="tw-text-orange">Servisin</span>
                    </h2>
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap">
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tablet:tw-mb-0 tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 467.5 467.5" style="enable-background:new 0 0 467.5 467.5;" xml:space="preserve">
                            <g>
                                <path
                                    d="M438.605,235.4c-0.7-3.8-3-7-6.3-9c-76-45.3-120.6-54.7-153.2-61.5c-4.2-0.9-8.3-1.7-12.2-2.6l-14.1-115.9
                        		c-0.5-25.6-21.5-46.4-47.2-46.4c-25.4,0-45.9,19.6-47.2,44.8c0,0.5-0.1,0.9-0.1,1.4v68.2l-1.1,166.5l-18-13.9
                        		c-3.5-3-27.9-22.7-58.1-22.7c-20.4,0-38.5,8.6-53.8,25.4c-4.3,4.7-4.7,11.7-1,16.9c1.3,1.8,32.3,45.2,80.9,89.4
                        		c28.8,26.1,57.8,47,86.2,62.1c36.2,19.2,71.6,29.1,105.3,29.4c0.5,0,1.1,0,1.6,0l0,0c46,0,81.8-15.2,106.4-45.1
                        		C461.505,355.8,439.505,240.3,438.605,235.4z M385.805,405.4c-19.2,23.4-48,35.2-85.5,35.2c-0.5,0-0.9,0-1.4,0
                        		c-66.9-0.5-131.1-46-173.1-84.1c-33.5-30.4-58.8-61-70.4-76c7.9-6.1,16.4-9.1,25.8-9.1c21.7,0,40.5,16.1,40.6,16.3
                        		c0.2,0.2,0.5,0.4,0.7,0.6l39.9,30.7c4.1,3.1,9.5,3.7,14.2,1.4c4.6-2.2,7.5-6.9,7.6-12l1.3-193.8V47.1c0-0.1,0-0.3,0-0.4
                        		c0.3-11,9.2-19.6,20.2-19.6c11.2,0,20.2,9.1,20.2,20.2c0,0.5,0,1.1,0.1,1.6l15.1,125.9c0.7,5.5,4.6,10,9.9,11.4
                        		c7.2,1.9,14.6,3.5,22.5,5.1c31.6,6.6,70.8,14.9,139.6,55.1C416.505,269.6,426.205,356.3,385.805,405.4z" />
                            </g>
                        </svg>
                        <div class="tw-px-6 tw-pt-8 tw-pb-6">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">Pilih</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                Pilih layanan pada servisin sesuai dengan yang Anda butuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tablet:tw-mb-0 tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M21,12H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H21a1,1,0,0,1,1,1v4A1,1,0,0,1,21,12ZM8,10H20V7.94H8Z" class="clr-i-outline clr-i-outline-path-1"></path>
                            <path d="M21,14.08H7a1,1,0,0,0-1,1V19a1,1,0,0,0,1,1H18.36L22,16.3V15.08A1,1,0,0,0,21,14.08ZM20,18H8V16H20Z" class="clr-i-outline clr-i-outline-path-2"></path>
                            <path d="M11.06,31.51v-.06l.32-1.39H4V4h20V14.25L26,12.36V3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V31a1,1,0,0,0,1,1h8A3.44,3.44,0,0,1,11.06,31.51Z" class="clr-i-outline clr-i-outline-path-3"></path>
                            <path d="M22,19.17l-.78.79A1,1,0,0,0,22,19.17Z" class="clr-i-outline clr-i-outline-path-4">
                            </path>
                            <path d="M6,26.94a1,1,0,0,0,1,1h4.84l.3-1.3.13-.55,0-.05H8V24h6.34l2-2H7a1,1,0,0,0-1,1Z" class="clr-i-outline clr-i-outline-path-5"></path>
                            <path d="M33.49,16.67,30.12,13.3a1.61,1.61,0,0,0-2.28,0h0L14.13,27.09,13,31.9a1.61,1.61,0,0,0,1.26,1.9,1.55,1.55,0,0,0,.31,0,1.15,1.15,0,0,0,.37,0l4.85-1.07L33.49,19a1.6,1.6,0,0,0,0-2.27ZM18.77,30.91l-3.66.81L16,28.09,26.28,17.7l2.82,2.82ZM30.23,19.39l-2.82-2.82L29,15l2.84,2.84Z" class="clr-i-outline clr-i-outline-path-6">
                            </path>
                            <rect x="0" y="0" width="36" height="36" fill-opacity="0" />
                        </svg>
                        <div class="tw-px-6 tw-pt-8 tw-pb-6">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">Pesan</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                Tentukan lokasi, pilih tanggal dan waktu sesuai kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tablet:tw-mb-0 tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M509.635,439.514l-70.173-117.399c-3.014-5.042-8.457-8.129-14.33-8.129h-40.31l-46.179-46.176l5.38-5.38
                        			c45.651,12.183,95.257-0.807,128.949-34.501c36.243-36.243,48.534-90.9,31.312-139.247c-4.109-11.535-18.867-14.865-27.532-6.203
                        			l-68.292,68.299l-39.351-7.871l-7.871-39.352l68.292-68.289c8.657-8.656,5.34-23.419-6.201-27.531
                        			c-48.341-17.23-102.993-4.941-139.236,31.3c-23.795,23.792-37.248,55.519-38.823,88.182L132.697,14.643
                        			C113.179-4.874,81.383-4.882,61.874,14.641L14.646,61.859c-19.528,19.53-19.528,51.305,0,70.835l135.116,135.115l-44.105,44.105
                        			c-1.739-0.157-3.562-0.258-5.47-0.258c-55.234,0-100.171,44.937-100.171,100.171c0,55.234,44.937,100.171,100.171,100.171
                        			c55.234,0,100.171-44.937,100.171-100.171c0-1.908-0.102-3.732-0.258-5.472l67.714-67.714l46.175,46.179v40.302
                        			c0,5.873,3.086,11.316,8.129,14.33l117.403,70.181c6.563,3.923,14.96,2.887,20.371-2.525l47.217-47.222
                        			C512.518,454.476,513.559,446.082,509.635,439.514z M38.256,109.084c-6.51-6.511-6.51-17.104-0.001-23.614l47.234-47.221
                        			c6.461-6.466,17.127-6.467,23.598,0.004c141.75,141.75,133.04,133.322,135.405,134.826l-23.9,23.9L95.297,71.683
                        			c-6.519-6.519-17.09-6.519-23.61,0c-6.52,6.519-6.52,17.09,0,23.61l125.296,125.296l-23.61,23.61L38.256,109.084z M256.02,303.211
                        			c-0.003,0.003-0.008,0.007-0.011,0.01c-0.003,0.003-0.007,0.008-0.01,0.011l-85.3,85.3c-3.701,3.7-5.452,8.922-4.73,14.105
                        			c0.56,3.946,0.999,6.723,0.999,9.187c0,36.823-29.958,66.78-66.78,66.78c-36.823,0-66.78-29.958-66.78-66.78
                        			s29.958-66.78,66.78-66.78c2.165,0,4.611,0.348,7.444,0.753c6.105,0.861,11.263,0.098,15.847-4.484l156.838-156.838
                        			c4.56-4.56,6.086-11.337,3.921-17.411c-12.925-36.254-3.715-77.242,23.463-104.417c20.306-20.302,48.323-30.561,76.308-29.086
                        			l-52.701,52.699c-3.947,3.947-5.661,9.605-4.566,15.08l11.807,59.027c1.322,6.609,6.488,11.773,13.096,13.097l59.027,11.807
                        			c5.473,1.092,11.133-0.619,15.08-4.567l52.7-52.705c1.488,27.995-8.787,56.015-29.091,76.318
                        			c-27.172,27.176-68.157,36.384-104.415,23.459c-6.075-2.168-12.852-0.64-17.411,3.92L256.02,303.211z M445.483,474.295
                        			l-98.105-58.643v-37.747c0-4.429-1.759-8.674-4.889-11.805l-51.066-51.069l23.61-23.61l51.069,51.064
                        			c3.131,3.131,7.377,4.891,11.805,4.891h37.753l58.638,98.102L445.483,474.295z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M100.186,378.436c-18.411,0-33.39,14.979-33.39,33.39c0,18.411,14.979,33.39,33.39,33.39s33.39-14.979,33.39-33.39
                        			C133.576,393.415,118.597,378.436,100.186,378.436z" />
                                </g>
                            </g>
                        </svg>
                        <div class="px-6 tw-pt-8 tw-pb-6">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-left">
                                    Nikmati</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-left">
                                Silahkan Duduk dan Bersantai. Teknisi akan menuju rumah anda</p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="tw-mx-auto tw-px-4 sm:tw-mx-8 sm:tw-text-center md:tw-mx-24 md:tw-text-center lg:tw-mx-auto lg:tw-text-center xl:tw-mx-auto xl:tw-text-center mobile:tw-text-center">
                <a href="cara-memesan.html" class="tw-block tw-text-base tw-font-semibold tw-text-black tw-no-underline hover:tw-no-underline">
                    Baca Selengkapnya
                </a>
            </div> --}}

        </div>
    </section>
    <!-- Cara Memesan End -->

    <!-- Keunggulan Start -->
    <section id="keunggulan" class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <h2 class="tw-text-xl tw-font-bold tw-text-black">Apa
                        Keunggulan
                        <span class="tw-text-orange">Servisin</span> ?
                    </h2>
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap">
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 349.667 349.667" style="enable-background:new 0 0 349.667 349.667;" xml:space="preserve">
                            <g>
                                <path
                                    d="M174.834,197.204c24.125,0,80.846-29.034,80.846-98.603c0-9.703-0.237-19.076-1.036-27.933
                                                		c-1.313-17.433-4.884-32.883-13.775-44.724C229.468,9.836,209.52,0,174.834,0c-34.688,0-54.637,9.837-66.038,25.948
                                                		c-8.885,11.834-12.456,27.273-13.77,44.694c-0.802,8.865-1.039,18.247-1.039,27.96C93.987,168.17,150.709,197.204,174.834,197.204z
                                                		 M201.223,36.123c-2.355,5.951-3.534,8.927-5.89,14.877c-15.209-4.297-25.791-4.297-41,0c-2.356-5.95-3.534-8.926-5.89-14.877
                                                		C167.462,30.365,182.205,30.366,201.223,36.123z M106.015,83.514c0.929,2.034,4.886,9.872,11.014,10.607
                                                		c7.04,0.845,18.727-24.935,57.804-24.998c39.077,0.063,50.764,25.843,57.804,24.998c6.127-0.735,10.085-8.574,11.014-10.607
                                                		c0.19,4.994,0.26,10.048,0.26,15.088c0,34.005-15.016,55.075-27.612,66.762c-15.872,14.727-33.494,20.072-41.466,20.072
                                                		c-7.972,0-25.594-5.345-41.466-20.072c-12.597-11.687-27.612-32.757-27.612-66.762C105.755,93.562,105.825,88.507,106.015,83.514z" />
                                <path
                                    d="M324.926,298.327c-4.128-25.665-12.624-58.724-29.667-70.472c-11.638-8.024-52.243-29.718-69.582-38.982l-0.3-0.16
                                                		c-1.982-1.059-4.403-0.847-6.17,0.541c-9.083,7.131-19.033,11.937-29.573,14.284c-1.861,0.415-3.391,1.738-4.067,3.521
                                                		l-10.732,28.291l-10.733-28.291c-0.677-1.783-2.205-3.106-4.067-3.521c-10.54-2.347-20.49-7.153-29.573-14.284
                                                		c-1.769-1.388-4.188-1.601-6.17-0.541c-17.134,9.155-58.235,31.291-69.831,39.107c-19.619,13.217-28.198,61.052-29.719,70.507
                                                		c-0.15,0.938-0.063,1.897,0.254,2.792c0.702,1.982,18.708,48.548,149.839,48.548c131.131,0,149.137-46.566,149.839-48.548
                                                		C324.989,300.224,325.077,299.264,324.926,298.327z M255.649,277.337l-12.655,27.928c-0.206,0.452-0.656,0.735-1.142,0.735
                                                		c-0.063,0-0.125-0.004-0.188-0.014c-0.555-0.084-0.986-0.526-1.057-1.083l-2.33-18.468h-5.821c-0.335,0-0.655-0.134-0.892-0.373
                                                		c-0.235-0.236-0.366-0.559-0.362-0.894l0.281-27.927c0.007-0.688,0.566-1.242,1.254-1.242h19.732c0.398,0,0.773,0.19,1.009,0.51
                                                		c0.236,0.319,0.307,0.732,0.19,1.113l-5.515,17.942h6.353c0.427,0,0.824,0.217,1.055,0.575
                                                		C255.793,276.498,255.825,276.949,255.649,277.337z" />
                            </g>
                        </svg>
                        <div class="tw-px-6 tw-pt-8 tw-pb-2">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-center">Teknisi
                                    Terlatih
                                </a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-center">
                                Anda akan mendapatkan mitra teknisi yang terampil dan berpengalaman pada layanan yang
                                bersangkutan</p>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M339.4,102c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9
                        			c10,0,18.1-8.1,18.1-18.1V102z" />
                                    <path d="M488.9,102c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9
                        			c10,0,18.1-8.1,18.1-18.1V102z" />
                                    <path d="M339.4,251.5c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9
                        			c10,0,18.1-8.1,18.1-18.1V251.5z" />
                                    <path d="M488.9,251.5c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9
                        			c10,0,18.1-8.1,18.1-18.1V251.5z" />
                                    <path d="M189.9,251.5c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9
                        			c10,0,18.1-8.1,18.1-18.1V251.5z" />
                                    <path d="M321.3,382.9h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9c10,0,18.1-8.1,18.1-18.1V401
                        			C339.4,391,331.3,382.9,321.3,382.9z" />
                                    <path d="M400.9,489h69.9c10,0,18.1-8.1,18.1-18.1V401c0-10-8.1-18.1-18.1-18.1h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9
                        			C382.8,480.9,390.9,489,400.9,489z" />
                                    <path d="M171.8,382.9h-69.9c-10,0-18.1,8.1-18.1,18.1v69.9c0,10,8.1,18.1,18.1,18.1h69.9c10,0,18.1-8.1,18.1-18.1V401
                        			C189.9,391,181.8,382.9,171.8,382.9z" />
                                    <path d="M145,45.3v99.6H45.4V45.3H145 M162.2,0h-134C12.7,0,0.1,12.6,0.1,28.1v137.3c0,13.7,11.1,24.8,24.8,24.8h137.3
                        			c15.5,0,28.1-12.6,28.1-28.1v-134C190.3,12.6,177.7,0,162.2,0L162.2,0z" />
                                </g>
                            </g>
                        </svg>
                        <div class="tw-px-6 tw-pt-8 tw-pb-2">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-center">Layanan
                                    Beragam</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-center">
                                Nikmati beragam
                                layanan yang disediakan untuk memenuhi kebutuhan servis perabot elektronik Anda</p>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg tablet:tw-flex">
                        <svg class="tw-mx-auto tw-mt-5 tw-h-52 tw-w-52 tw-fill-current tw-text-orange sm:tw-h-20 sm:tw-w-20 lg:tw-h-20 lg:tw-w-20 xl:tw-h-20 xl:tw-w-20 mobile:tw-h-20 mobile:tw-w-20 tablet:tw-ml-5 tablet:tw-mt-7 tablet:tw-h-[90px] tablet:tw-w-[90px]" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 229.5 229.5" style="enable-background:new 0 0 229.5 229.5;" xml:space="preserve">
                            <path d="M214.419,32.12c-0.412-2.959-2.541-5.393-5.419-6.193L116.76,0.275c-1.315-0.366-2.704-0.366-4.02,0L20.5,25.927
                        	c-2.878,0.8-5.007,3.233-5.419,6.193c-0.535,3.847-12.74,94.743,18.565,139.961c31.268,45.164,77.395,56.738,79.343,57.209
                        	c0.579,0.14,1.169,0.209,1.761,0.209s1.182-0.07,1.761-0.209c1.949-0.471,48.076-12.045,79.343-57.209
                        	C227.159,126.864,214.954,35.968,214.419,32.12z M174.233,85.186l-62.917,62.917c-1.464,1.464-3.384,2.197-5.303,2.197
                        	s-3.839-0.732-5.303-2.197l-38.901-38.901c-1.407-1.406-2.197-3.314-2.197-5.303s0.791-3.897,2.197-5.303l7.724-7.724
                        	c2.929-2.928,7.678-2.929,10.606,0l25.874,25.874l49.89-49.891c1.406-1.407,3.314-2.197,5.303-2.197s3.897,0.79,5.303,2.197
                        	l7.724,7.724C177.162,77.508,177.162,82.257,174.233,85.186z" />
                        </svg>
                        <div class="px-6 tw-pt-8 tw-pb-2">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-center tw-text-base tw-font-semibold tw-text-black tablet:tw-text-center">
                                    Jaminan Garansi</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-center tw-text-sm tw-font-medium tw-text-black tablet:tw-text-center">
                                Jika Anda tidak puas dengan layanan kami, kami akan mengirimkan teknisi untuk
                                memperbaikinya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Keunggulan End -->

    <!-- Testimoni Start -->
    <section id="testimoni" class="tw-w-full tw-bg-orange tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-mx-auto tw-px-4">
                <h2 class="tw-text-center tw-text-xl tw-font-bold tw-tracking-widest tw-text-white">
                    Testimoni Pelanggan Kami
                </h2>

                <div class="swiper-container tw-mt-12 !tw-overflow-hidden sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote class="tw-rounded-lg tw-bg-white tw-p-8">
                                <div class="tw-flex tw-items-center">
                                    <img alt="Man" src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" class="tw-h-16 tw-w-16 tw-rounded-full tw-object-cover" />

                                    <div class="tw-ml-4">
                                        <p class="tw-mt-1 tw-text-lg tw-font-bold tw-text-gray-700">Paul
                                            Starr</p>
                                    </div>
                                </div>

                                <p class="tw-mt-4 tw-mb-auto tw-text-base tw-text-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt

                                </p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="tw-rounded-lg tw-bg-white tw-p-8">
                                <div class="tw-flex tw-items-center">
                                    <img alt="Man" src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" class="tw-h-16 tw-w-16 tw-rounded-full tw-object-cover" />

                                    <div class="tw-ml-4">
                                        <p class="tw-mt-1 tw-text-lg tw-font-bold tw-text-gray-700">Paul
                                            Starr</p>
                                    </div>
                                </div>

                                <p class="tw-mt-4 tw-mb-auto tw-text-base tw-text-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    voluptatem alias ut provident sapiente repellendus.
                                </p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="tw-h-full tw-rounded-lg tw-bg-white tw-p-8">
                                <div class="tw-flex tw-items-center">
                                    <img alt="Man" src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" class="tw-h-16 tw-w-16 tw-rounded-full tw-object-cover" />

                                    <div class="tw-ml-4">
                                        <p class="tw-mt-1 tw-text-lg tw-font-bold tw-text-gray-700">Paul
                                            Starr</p>
                                    </div>
                                </div>

                                <p class="tw-mt-4 tw-text-base tw-text-black">
                                    Lorem ipsum dolor sit amet.
                                </p>
                            </blockquote>
                        </div>
                        <div class="swiper-slide">
                            <blockquote class="tw-h-full tw-rounded-lg tw-bg-white tw-p-8">
                                <div class="tw-flex tw-items-center">
                                    <img alt="Man" src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" class="tw-h-16 tw-w-16 tw-rounded-full tw-object-cover" />

                                    <div class="tw-ml-4">
                                        <p class="tw-mt-1 tw-text-lg tw-font-bold tw-text-gray-700">Paul Starr</p>
                                    </div>
                                </div>

                                <p class="tw-mt-4 tw-text-base tw-text-black">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ipsum veniam cumque
                                    dolores ratione doloremque illum modi quos voluptatem commodi.
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimoni End -->

    <!-- Company Profile Start -->
    <section class="tw-max-h-screen tw-w-full tw-bg-white tw-pt-12 tw-pb-11 xl:tw-pt-6 mobile:tw-pt-[20px] mobile:tw-pb-[40px]">
        <div class="tw-container tw-mx-auto tw-h-full">
            <div class="tw-font-poppins tw-w-full tw-px-4 tw-py-4 tablet:tw-py-4">
                <div class="tw-grid tw-grid-cols-1 tw-gap-8 lg:tw-grid-cols-2 lg:tw-gap-16 tablet:tw-gap-0">
                    <div class="tw-mx-auto tw-overflow-hidden tw-rounded-lg lg:tw-order-last lg:tw-mt-6 lg:tw-h-full">
                        <img alt="Party" src="{{ url('assets/img/logo-orange.jpg') }}" class="tw-h-full tw-w-full sm:tw-h-[68px] sm:tw-w-[213px] lg:tw-h-[96px] lg:tw-w-[300px] xl:tw-h-[96px] xl:tw-w-[300px] mobile:tw-h-[60px] mobile:tw-w-[188px] tablet:tw-h-[68px] tablet:tw-w-[213px]" />
                    </div>
                    <div class="sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                        <p class="tw-text-xl tw-font-bold sm:tw-invisible sm:tw-text-center sm:tw-text-base md:tw-text-base lg:tw-visible lg:tw-text-left lg:tw-text-xl xl:tw-visible xl:tw-text-left xl:tw-text-xl mobile:tw-hidden tablet:tw-hidden tablet:tw-text-center">
                            Servisin</p>
                        <p class="tw-mt-4 tw-text-lg sm:tw-text-sm md:tw-text-sm lg:tw-text-base xl:tw-text-base mobile:tw-mt-0 mobile:tw-text-sm tablet:tw-text-left">
                            Kami hadir
                            adalah Startup yang bertujuan untuk melayani layanan home service perbaikan perabot
                            elektronik rumah tangga.
                            Servisin menghubungkan antara konsumen dan teknisi di berbagai lokasi dengan berbagai macam
                            layanan yang tersedia.</p>
                    </div>
                </div>
                <p class="tw-mx-auto tw-mt-4 tw-text-lg tw-font-bold sm:tw-mx-8 sm:tw-text-right sm:tw-text-base md:tw-text-base lg:tw-mx-auto lg:tw-text-left xl:tw-mx-auto xl:tw-text-left mobile:tw-text-right mobile:tw-text-sm tablet:tw-mx-24 tablet:tw-px-0 tablet:tw-text-right">
                    Selengkapnya
                </p>
            </div>
        </div>
    </section>
    <!-- Company Profile End -->

    <!-- Counting Data Start -->
    <section class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-mx-2 tw-grid tw-grid-cols-3 sm:tw-mx-8 lg:tw-mx-auto xl:tw-mx-auto tablet:tw-mx-24">
                <div class="tw-mx-2 tw-mb-2 tw-mt-3 sm:tw-mx-4 lg:tw-mx-4 xl:tw-mx-4 tablet:tw-mx-4">
                    <a href="#">
                        <div class="tw-rounded-lg tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-lg">
                            <svg class="tw-mx-auto tw-mb-4 tw-h-20 tw-w-20 tw-pt-4 mobile:tw-h-16 mobile:tw-w-14 tablet:tw-h-20 tablet:tw-w-20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="256px" height="256px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
                                <path
                                    d="M136.896,147.739V92.723h45.017v55.016H136.896z M159.806,85.007c19.885,0,36.202-15.239,37.932-34.673h-75.864
                            	C123.605,69.769,139.922,85.007,159.806,85.007z M197.899,40.093c0-21.038-17.055-38.092-38.092-38.092
                            	c-17.423,0-32.103,11.702-36.637,27.672H96.453v11.807h101.411C197.882,41.019,197.899,40.558,197.899,40.093z M207.295,92.723
                            	H191.01v86.543h13.671v65.878h-90.518l0.006-65.878h13.63V92.723h-16.531c-25.57,0-46.299,20.729-46.299,46.299v40.244
                            	l-28.533-0.042v-40.34c8.81-3.885,14.693-12.47,14.693-22.711c0-10.253-6.039-19.515-14.855-23.393v23.704H16.522V92.779
                            	C7.974,96.766,2,106.118,2,116.173c0,10.049,6.213,18.719,14.758,22.711v40.34C8.672,179.799,2,186.539,2,194.771
                            	c0,8.232,6.385,14.959,14.472,15.534v23.93h19.697v-23.847l40.351,0.059c10.604,0,19.258-8.26,19.934-18.694v-44.014h8.855v106.26
                            	h108.228v-106.26h8.878l0.082,90.42c0,8.611,6.817,15.841,15.427,15.841h0.346c8.61,0,15.73-6.897,15.73-15.507v-99.47
                            	C254,113.452,232.865,92.723,207.295,92.723z" />
                            </svg>
                            <p class="tw-mb-2 tw-text-center tw-text-3xl tw-font-extrabold tw-text-black mobile:tw-text-base">
                                05</p>
                            <p class="tw-mb-4 tw-text-center tw-text-xs tw-font-bold tw-text-black sm:tw-text-base lg:tw-text-base xl:tw-text-base tablet:tw-text-base">
                                Penyedia Jasa</p>
                        </div>
                    </a>
                </div>
                <div class="tw-mx-2 tw-mb-2 tw-mt-3 sm:tw-mx-4 lg:tw-mx-4 xl:tw-mx-4 tablet:tw-mx-4">
                    <a href="#">
                        <div class="tw-rounded-lg tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-lg">
                            <svg class="tw-mx-auto tw-mb-4 tw-h-20 tw-w-20 tw-fill-current tw-pt-4 tw-text-black sm:tw-w-20 mobile:tw-h-16 mobile:tw-w-14 tablet:tw-h-20 tablet:tw-w-20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.997 511.997" style="enable-background:new 0 0 511.997 511.997;" xml:space="preserve">
                                <path style="fill:#A2A9AF;" d="M443.265,13.721l0.01,98.229l-54.98,38.037l-54.96-38.057l-0.047-98.229
                            	c-34.073,19.247-57.133,55.751-57.133,97.724c0,16.857,4.031,32.73,10.701,47.061l-262.5,262.519
                            	c-17.037,16.979-17.01,44.583-0.038,61.572c17.036,17.036,44.611,16.999,61.61-0.01l265.674-265.682c0,0,23.792,6.613,36.655,6.622
                            	c61.964,0.048,112.159-50.205,112.159-112.13C500.407,69.461,477.358,32.959,443.265,13.721z" />
                                <polygon style="fill:#4C5870;" points="389.841,374.235 243.454,227.847 222.36,248.939 368.748,395.327 381.672,430.968
                            	449.001,498.296 492.809,454.488 425.481,387.159 " />
                                <path style="fill:#EE3840;" d="M216.268,287.795L27.179,98.715C8.935,80.481,8.894,50.904,27.168,32.63
                            	C45.392,14.427,75,14.396,93.213,32.67l189.101,189.08L216.268,287.795z" />
                                <g>
                                    <path d="M228.122,233.603c-4.523,4.523-11.858,4.523-16.382,0L51.941,73.804
                            		c-4.523-4.523-4.523-11.858,0-16.382s11.858-4.523,16.382,0l159.798,159.798C232.644,221.744,232.645,229.079,228.122,233.603z" />
                                    <path d="M295.612,224.834l-76.26,76.26c-4.523,4.523-11.858,4.523-16.382,0s-4.523-11.858,0-16.382
                            		l76.26-76.26c4.523-4.523,11.858-4.523,16.382,0C300.135,212.975,300.135,220.31,295.612,224.834z" />
                                </g>
                                <circle cx="54.953" cy="451.949" r="11.584" />
                                <g>
                                    <path
                                        d="M269.098,159.864c-4.522,4.525-4.522,11.858,0.002,16.383c4.525,4.525,11.859,4.523,16.382-0.002
                            		l9.565-9.568c3.44-3.442,4.364-8.666,2.31-13.078c-6.383-13.715-9.619-27.904-9.619-42.174c0-29.051,12.646-56.413,33.976-75.317
                            		l0.037,75.828c0.001,3.798,1.866,7.356,4.989,9.518l54.96,38.057c3.965,2.745,9.218,2.748,13.185,0.002l54.98-38.037
                            		c3.128-2.164,4.994-5.724,4.994-9.528l-0.008-75.824c21.328,18.887,33.975,46.227,33.982,75.254
                            		c0,26.863-10.459,52.119-29.452,71.115c-18.978,18.982-44.202,29.432-71.037,29.432c-0.026,0-0.052,0-0.079,0
                            		c-9.233-0.007-27.358-4.477-33.564-6.2c-4.023-1.119-8.339,0.017-11.292,2.969l-35.217,35.218c-4.523,4.523-4.523,11.858,0,16.383
                            		c2.262,2.261,5.227,3.393,8.191,3.393s5.93-1.132,8.191-3.393l30.527-30.528c8.511,2.105,23.14,5.318,33.146,5.325
                            		c0.035,0,0.064,0,0.097,0c33.019-0.001,64.066-12.863,87.419-36.22c23.367-23.371,36.235-54.443,36.235-87.496
                            		c-0.01-44.521-24.167-85.805-63.042-107.744c-3.586-2.024-7.978-1.992-11.535,0.085c-3.556,2.077-5.743,5.886-5.742,10.005
                            		l0.009,92.157l-43.393,30.02l-43.378-30.04l-0.045-92.163c-0.002-4.118-2.19-7.926-5.747-10c-3.556-2.076-7.948-2.105-11.534-0.08
                            		c-38.871,21.958-63.019,63.268-63.019,107.808c0,15.045,2.873,29.949,8.552,44.415L269.098,159.864z" />
                                    <path d="M238.425,313.682L77.734,474.379c-6.039,6.042-14.066,9.371-22.603,9.377c-0.006,0-0.01,0-0.017,0
                            		c-8.535-0.001-16.564-3.328-22.601-9.365c-6.036-6.043-9.356-14.081-9.346-22.636c0.009-8.529,3.335-16.536,9.379-22.56
                            		l138.216-138.228c4.523-4.523,4.523-11.857,0-16.382c-4.523-4.522-11.858-4.523-16.382,0.001L16.179,412.8
                            		C5.763,423.18,0.017,437.006,0,451.728c-0.017,14.747,5.708,28.611,16.127,39.041c10.418,10.418,24.263,16.155,38.986,16.155
                            		c0.01,0,0.021,0,0.03,0c14.724-0.008,28.567-5.75,38.976-16.165l160.688-160.694c4.523-4.523,4.523-11.858,0-16.383
                            		C250.282,309.16,242.949,309.16,238.425,313.682z" />
                                    <path
                                        d="M433.672,378.968c-1.2-1.199-2.648-2.12-4.242-2.699l-33.219-12.045L276.218,244.228l19.395-19.393
                            		c4.523-4.523,4.525-11.858,0-16.383c-3.433-3.431-8.485-4.26-12.699-2.484L101.418,24.493C90.441,13.481,75.822,7.406,60.255,7.388
                            		c-0.023,0-0.044,0-0.067,0c-15.567,0-30.2,6.054-41.21,17.051C7.953,35.463,1.887,50.114,1.896,65.694
                            		c0.008,15.567,6.079,30.205,17.092,41.211l181.498,181.49c-1.777,4.213-0.95,9.265,2.484,12.698c4.525,4.522,11.859,4.525,16.382,0
                            		l19.39-19.39l119.995,119.993l12.046,33.22c0.578,1.594,1.499,3.043,2.699,4.242l67.329,67.328
                            		c2.262,2.261,5.227,3.393,8.191,3.393s5.93-1.132,8.191-3.393L501,462.679c2.172-2.173,3.393-5.119,3.393-8.191
                            		s-1.221-6.018-3.393-8.191L433.672,378.968z M251.643,236.037c-0.024,0.024-0.05,0.051-0.074,0.075l-35.301,35.301L35.367,90.522
                            		c-6.64-6.636-10.299-15.457-10.304-24.839c-0.005-9.387,3.651-18.217,10.291-24.856c6.632-6.625,15.449-10.27,24.833-10.27
                            		c0.014,0,0.028,0,0.041,0c9.375,0.01,18.174,3.666,24.793,10.306l180.909,180.89l-14.211,14.211
                            		C251.694,235.988,251.669,236.012,251.643,236.037z M449.001,481.914l-57.316-57.316l-12.046-33.22
                            		c-0.578-1.594-1.499-3.043-2.699-4.242L255.124,265.322l4.712-4.711l121.814,121.815c1.2,1.199,2.648,2.12,4.242,2.699
                            		l33.219,12.045l57.316,57.316L449.001,481.914z" />
                                    <path d="M68.322,57.422c-4.523-4.522-11.858-4.522-16.382,0c-4.523,4.523-4.523,11.858,0,16.383
                            		l159.798,159.797c2.261,2.261,5.227,3.393,8.191,3.393c2.964,0,5.93-1.132,8.191-3.393c4.523-4.523,4.523-11.858,0-16.383
                            		L68.322,57.422z" />
                                </g>
                            </svg>
                            <p class="tw-mb-2 tw-text-center tw-text-3xl tw-font-extrabold tw-text-black mobile:tw-text-base">
                                {{ $getLayanan }}</p>
                            <p class="tw-mb-4 tw-text-center tw-text-xs tw-font-bold tw-text-black sm:tw-text-base lg:tw-text-base xl:tw-text-base tablet:tw-text-base">
                                Layanan</p>
                        </div>
                    </a>
                </div>
                <div class="tw-mx-2 tw-mb-2 tw-mt-3 sm:tw-mx-4 lg:tw-mx-4 xl:tw-mx-4 tablet:tw-mx-4">
                    <a href="#">
                        <div class="tw-rounded-lg tw-border tw-border-[#fff] tw-bg-[#fff] tw-shadow-lg">
                            <svg class="tw-mx-auto tw-mb-4 tw-h-20 tw-w-20 tw-fill-current tw-pt-4 tw-text-black sm:tw-w-20 mobile:tw-h-16 mobile:tw-w-14 tablet:tw-h-20 tablet:tw-w-20" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="26. Clipboard" id="_26._Clipboard">
                                    <path class="cls-1" d="M25,32H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H8A1,1,0,0,1,8,6H7A1,1,0,0,0,6,7V29a1,1,0,0,0,1,1H25a1,1,0,0,0,1-1V16a1,1,0,0,1,2,0V29A3,3,0,0,1,25,32Z" />
                                    <path class="cls-1" d="M27,13a1,1,0,0,1-1-1V7a1,1,0,0,0-1-1H20a1,1,0,0,1,0-2h5a3,3,0,0,1,3,3v5A1,1,0,0,1,27,13Z" />
                                    <path class="cls-1" d="M19,8H13a2,2,0,0,1-2-2V4a2,2,0,0,1,2-2h6a2,2,0,0,1,2,2V6A2,2,0,0,1,19,8ZM13,4V6h6V4Z" />
                                    <path class="cls-1" d="M16,4a1,1,0,0,1-1-1V1a1,1,0,0,1,2,0V3A1,1,0,0,1,16,4Z" />
                                    <path class="cls-1" d="M13,17H9a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,13,17Zm-3-2h2V13H10Z" />
                                    <path class="cls-1" d="M13,26H9a1,1,0,0,1-1-1V21a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v4A1,1,0,0,1,13,26Zm-3-2h2V22H10Z" />
                                    <path class="cls-2" d="M23,15H17a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z" />
                                    <path class="cls-2" d="M23,24H17a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Z" />
                                </g>
                            </svg>
                            <p class="tw-mb-2 tw-text-center tw-text-3xl tw-font-extrabold tw-text-black mobile:tw-text-base">
                                {{ $getPemesanan }}</p>
                            <p class="tw-mb-4 tw-text-center tw-text-xs tw-font-bold tw-text-black sm:tw-text-base lg:tw-text-base xl:tw-text-base tablet:tw-text-base">
                                Transaksi</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Counting Data End -->

    <!-- Mitra Start -->
    <section id="mitra" class="tw-max-h-screen tw-w-full tw-bg-white tw-pt-12 xl:tw-pt-6 mobile:tw-pt-[20px] mobile:tw-pb-[40px]">
        <div class="tw-container tw-mx-auto tw-h-full">
            <div class="tw-font-poppins tw-w-full tw-px-4 tw-py-4 tablet:tw-py-4">
                <div class="tw-grid tw-grid-cols-2 tw-gap-8 sm:tw-mx-8 sm:tw-gap-0 lg:tw-mx-auto lg:tw-gap-0 xl:tw-mx-auto xl:tw-gap-0 mobile:tw-gap-0 tablet:tw-mx-24 tablet:tw-gap-0">
                    <div class="lg:tw-pt-14 xl:tw-pt-14">
                        <p class="tw-text-xl tw-font-bold sm:tw-text-base md:tw-text-base lg:tw-text-xl xl:tw-text-xl mobile:tw-text-base tablet:tw-text-left">
                            Bergabunglah Menjadi Mitra!</p>
                        <p class="tw-mt-4 tw-text-lg sm:tw-text-sm md:tw-text-sm mobile:tw-mt-4 mobile:tw-text-sm tablet:tw-text-left">
                            Dapatkan berbagai keuntungan
                            menjadi mitra Penyedia Jasa di Servisin!</p>
                        <button class="tw-mt-9 tw-rounded-lg tw-bg-orange tw-py-2.5 tw-px-[65px] tw-text-white tw-shadow-lg hover:tw-bg-orange/90 mobile:tw-mt-3 mobile:tw-px-[8px] mobile:tw-text-sm">Daftar
                            Disini</button>
                    </div>
                    <div class="tw-mx-auto tw-overflow-hidden tw-rounded-lg lg:tw-order-last lg:tw-mt-6 lg:tw-h-full">
                        <img alt="" src="{{ url('assets/img/jasa.png') }}" class="tw-h-full tw-w-full sm:tw-h-[194px] sm:tw-w-[138px] lg:tw-h-[259px] lg:tw-w-[184px] xl:tw-h-[259px] xl:tw-w-[184px] mobile:tw-h-[147px] mobile:tw-w-[90px] tablet:tw-h-[194px] tablet:tw-w-[138px]" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mitra End -->

    <!-- Artikel Start -->
    <section id="artikel" class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <h2 class="tw-text-xl tw-font-bold">Artikel &
                        Tips
                    </h2>
                </div>
            </div>
            <div class="tw-flex tw-flex-wrap">
                @foreach ($getDataArtikel as $valuesArtikel)
                    @php
                        $deskripsi = substr($valuesArtikel->deskripsi, 3, 64);
                    @endphp
                    <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                        <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                            <div class="tw-items-center">
                                <img src="{{ asset('storage/' . $valuesArtikel->foto_artikel . '') }}" alt="Programming" class="tw-h-[200px] tw-w-full" />
                            </div>
                            <div class="tw-py-8 tw-px-6">
                                <h3>
                                    <a href="{{ route('home.detailartikel', $valuesArtikel->slug) }}" class="tw-mb-3 tw-block tw-truncate tw-text-base tw-font-semibold">{{ $valuesArtikel->judul }}</a>
                                </h3>
                                <article class="tw-prose-sm tw-mb-6 tw-text-sm tw-font-medium tw-text-black">{!! $deskripsi !!}</article>
                                <a href="{{ route('home.detailartikel', $valuesArtikel->slug) }}" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-sm tw-font-medium tw-text-white hover:tw-opacity-80">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="dark:bg-slate-800 tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                        <img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="Mechanical Keyboard" class="tw-w-full" />
                        <div class="tw-py-8 tw-px-6">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-base tw-font-semibold">Review
                                    Keyboard GMMK Pro</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-sm tw-font-medium tw-text-black">Lorem ipsum
                                dolor sit, amet consectetur adipisicing elit. Placeat officia beatae quisquam?</p>
                            <a href="#" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-sm tw-font-medium tw-text-white hover:tw-opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                    <div class="dark:bg-slate-800 tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                        <img src="https://source.unsplash.com/360x200?mechanical+keyboard" alt="Mechanical Keyboard" class="tw-w-full" />
                        <div class="tw-py-8 tw-px-6">
                            <h3>
                                <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-base tw-font-semibold">Review
                                    Keyboard GMMK Pro</a>
                            </h3>
                            <p class="tw-mb-6 tw-text-sm tw-font-medium tw-text-black">Lorem ipsum
                                dolor sit, amet consectetur adipisicing elit. Placeat officia beatae quisquam?</p>
                            <a href="#" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-sm tw-font-medium tw-text-white hover:tw-opacity-80">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="tw-mt-10 tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <a href="{{ route('home.artikelSelengkapnya') }}" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-base tw-font-medium tw-text-white tw-shadow-lg hover:tw-opacity-80">
                        Lihat Artikel dan Tips Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Artikel End -->
@endsection
