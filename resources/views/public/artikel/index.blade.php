@extends('public.layout.app')
@section('title', 'Artikel Selengkapnya')
@section('content')
    @include('public.layout.partials.nav')

    <!-- Artikel Start -->
    <section id="artikel" class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-24">
        <div class="tw-font-poppins tw-container tw-mx-auto">
            <div class="tw-w-full tw-px-4">
                <div class="tw-mx-auto tw-mb-12 tw-max-w-xl tw-text-center">
                    <h2 class="tw-text-xl tw-font-bold">Artikel &
                        Tips
                    </h2>
                </div>
            </div>

            <div class="tw-flex tw-flex-wrap">
                @foreach ($paginate as $valuesArtikel)
                    <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                        <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                            <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="tw-w-full" />
                            <div class="tw-py-8 tw-px-6">
                                <h3>
                                    <a href="#" class="tw-mb-3 tw-block tw-truncate tw-text-base tw-font-semibold">Tips
                                        Belajar Programming</a>
                                </h3>
                                <p class="tw-mb-6 tw-text-sm tw-font-medium tw-text-black">Lorem ipsum
                                    dolor sit, amet
                                    consectetur
                                    adipisicing
                                    elit. Placeat officia beatae quisquam?</p>
                                <a href="#" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-sm tw-font-medium tw-text-white hover:tw-opacity-80">Baca
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @php
                $pagination = $paginate->links('pagination::simple-tailwind');
            @endphp
            <div class="tw-mx-auto tw-px-4 sm:tw-mx-8 sm:tw-text-right sm:tw-text-base md:tw-mx-24 md:tw-text-base lg:tw-mx-auto lg:tw-text-right xl:tw-mx-auto xl:tw-text-right mobile:tw-text-right mobile:tw-text-sm tablet:tw-px-0 tablet:tw-text-right">
                {!! $paginate->links('pagination::tailwind') !!}
            </div>

        </div>
    </section>
    <!-- Artikel End -->
@endsection
