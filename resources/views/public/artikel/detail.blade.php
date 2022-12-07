@extends('public.layout.app')
@section('title', 'Detail Artikel')
@section('content')
    @include('public.layout.partials.nav')

    <!-- Artikel View Start -->
    <section id="artikel" class="tw-w-full tw-bg-white tw-pt-6 tw-pb-16">



        <div class="tw-container tw-mx-auto">
            @foreach ($getDetailArtikel as $valuesDetail)
                <div class="tw-w-full tw-px-4">
                    <div class="tw-mx-auto tw-max-w-xl tw-text-center">
                        <h2 class="tw-font-poppins tw-text-2xl tw-font-bold lg:tw-text-3xl xl:tw-text-3xl">Artikel &
                            Tips
                        </h2>
                    </div>
                </div>
                <div class="tw-px-4 tw-py-8 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                    <p class="tw-font-poppins tw-text-left tw-text-base tw-font-semibold lg:tw-text-xl xl:tw-text-xl">
                        {{ $valuesDetail->judul }}</p>
                    <p class="tw-font-poppins tw-text-left tw-text-sm lg:tw-text-base xl:tw-text-base">
                        by {{ $valuesDetail->author }}, {{ \Carbon\Carbon::parse($valuesDetail->created_at)->isoFormat('DD MMMM Y') }}</p>
                </div>
                <div class="tw-px-4 tw-py-1 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                    <img src="{{ url('storage/' . $valuesDetail->foto_artikel . '') }}" class="tw-w-full tw-rounded-lg sm:tw-h-[213px] lg:tw-mx-auto lg:tw-h-[262px] lg:tw-w-[506px] xl:tw-h-[353px] xl:tw-w-[682px] mobile:tw-mx-auto mobile:tw-h-[147px] mobile:tw-w-[281px] tablet:tw-mx-auto tablet:tw-h-[262px] tablet:tw-w-[506px]" />
                </div>
                <div class="tw-px-4 tw-py-8 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                    <article class="tw-font-poppins tw-prose-sm tw-w-full tw-text-justify lg:tw-prose-base xl:tw-prose-base">
                        {!! $valuesDetail->deskripsi !!}</article>
                </div>
            @endforeach
            <div class="tw-px-4 tw-py-8 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto xl:tw-mx-auto">
                <p class="tw-font-poppins tw-text-base tw-font-semibold lg:tw-text-lg xl:tw-text-lg">Related Post</p>
            </div>

            <div class="tw-flex tw-flex-wrap">
                @foreach ($getLatestArtikel as $latestArtikel)
                    <div class="tw-w-full tw-px-4 sm:tw-mx-8 md:tw-mx-24 lg:tw-mx-auto lg:tw-w-1/3 xl:tw-mx-auto xl:tw-w-1/3">
                        <div class="tw-mb-10 tw-overflow-hidden tw-rounded-xl tw-bg-white tw-shadow-lg">
                            <img src="{{ url('storage/' . $latestArtikel->foto_artikel . '') }}" alt="Programming" class="tw-h-[200px] tw-w-full" />
                            <div class="tw-py-4 tw-px-6">
                                <h3>
                                    <a href="{{ route('home.detailartikel', $latestArtikel->slug) }}" class="tw-font-poppins tw-mb-2 tw-block tw-truncate tw-text-sm tw-font-semibold lg:tw-text-base xl:tw-text-base">
                                        {{ $latestArtikel->judul }}</a>
                                </h3>
                                <div class="tw-mt-5">
                                    <a href="{{ route('home.detailartikel', $latestArtikel->slug) }}" class="tw-rounded-lg tw-bg-orange tw-py-2 tw-px-4 tw-text-sm tw-font-medium tw-text-white hover:tw-opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Artikel View End -->

@endsection
