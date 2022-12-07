@extends('public.layout.app')
@section('title', 'Pemesanan')
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
    <section class="tw-w-full tw-bg-slate-100 tw-pt-12 tw-pb-11">
        <div class="tw-container tw-mx-auto">
            <form action="{{ url('/pemesanan/tambah') }}" method="POST">
                @csrf
                <div class="tw-px-4 sm:tw-mx-8 lg:tw-mx-auto xl:tw-mx-auto tablet:tw-mx-24">
                    @foreach ($layanan as $item)
                        <input type="hidden" name="kode" value="INV/{{ date('Ymd') }}/{{ $item->kode_layanan }}/{{ $kode }}">
                    @endforeach
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="kode_layanan" value="{{ $item->kode_layanan }}">
                    <div class="tw-container tw-mx-auto tw-mt-5">
                        <div class="">
                            <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                                <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-base tw-font-extrabold">Data Konsumen</p>
                                <div class="tw-my-2 tw-mt-3 tw-flex tw-flex-wrap">
                                    @if (isset(Auth::user()->name))
                                        <div class="tw-flex tw-w-full">
                                            <svg class="tw-my-auto tw-ml-4 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                            <input type="text" name="nama" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nama" value="{{ Auth::user()->name }}" required />
                                        </div>
                                        <div class="tw-mt-3 tw-mb-3 tw-flex tw-w-full">
                                            <svg class="tw-my-auto tw-ml-4 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                            <input type="text" name="notelpon" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nomor Whatsapp" value="{{ Auth::user()->notelpon }}" required />
                                        </div>
                                    @else
                                        <div class="tw-flex tw-w-full">
                                            <svg class="tw-my-auto tw-ml-4 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                            <input type="text" name="nama" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nama" required />
                                        </div>
                                        <div class="tw-mt-3 tw-mb-3 tw-flex tw-w-full">
                                            <svg class="tw-my-auto tw-ml-4 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                            <input type="text" name="notelpon" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nomor Whatsapp" required />
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="tw-mx-auto tw-mt-5">
                            <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                                <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-base tw-font-extrabold">Alamat</p>
                                <div class="tw-grid tw-grid-flow-row tw-auto-rows-max tw-gap-2">
                                    <div class="tw-group tw-relative tw-mx-auto tw-w-full tw-px-3">
                                        <input type="text" name="alamat" class="tw-peer tw-block tw-w-full tw-min-w-max tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Alamat Lengkap" required />
                                    </div>
                                    <div class="tw-relative tw-mx-auto tw-w-full tw-px-3">
                                        <input type="text" name="kecamatan" class="tw-peer tw-block tw-w-full tw-min-w-max tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Kecamatan" required />
                                    </div>
                                    <div class="tw-group tw-relative tw-mx-auto tw-w-full tw-px-3">
                                        <input type="text" name="kota" class="tw-peer tw-block tw-w-full tw-min-w-max tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Kota" required />

                                    </div>
                                    <div class="tw-group tw-relative tw-mx-auto tw-mb-4 tw-w-full tw-px-3">
                                        <input type="text" name="detailalamat" class="tw-peer tw-block tw-w-full tw-min-w-max tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Detail Alamat (contoh: pagar putih)" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Keluhan -->
                    <div class="tw-container tw-mx-auto tw-mt-5">
                        <div class="tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                            <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-base tw-font-extrabold">Keluhan</p>
                            <div class="tw-mb-3 tw-grid tw-grid-flow-row tw-auto-rows-max tw-gap-2">
                                <div class="tw-group tw-relative tw-mx-auto tw-w-full tw-px-3">
                                    <input type="text" name="keluhan" class="tw-peer tw-block tw-w-full tw-min-w-max tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Keluhan" required />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Waktu Layanan -->
                    <!-- <div class="tw-container tw-mx-auto tw-mt-5">
                                                                                                <div class="tw-mx-3 tw-mt-1 tw-rounded-xl tw-border tw-border-[#fff] tw-bg-[#fff]">
                                                                                                    <p class="tw-font-poppins tw-my-1 tw-px-3 tw-pt-3 tw-text-base tw-font-extrabold">Waktu Layanan</p>
                                                                                                    <div class="tw-mb-3 tw-grid tw-grid-cols-2">
                                                                                                        <div class="tw-my-2 tw-mt-5 tw-flex tw-flex-wrap">
                                                                                                            <div class="tw-flex">
                                                                                                                <svg class="tw-my-auto tw-ml-3 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                                                                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                                                                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                                                                </svg>
                                                                                                                <input type="date" name="tanggal" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nama" required />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="tw-my-2 tw-mt-5 tw-ml-9 tw-flex tw-flex-wrap">
                                                                                                            <div class="tw-flex">
                                                                                                                <svg class="tw-my-auto tw-ml-3 tw-text-center" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                                                                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                                                                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                                                                                </svg>
                                                                                                                <input type="time" name="waktu" class="tw-peer tw-mx-3 tw-block tw-w-full tw-appearance-none tw-border-0 tw-border-b-2 tw-border-gray-300 tw-bg-transparent tw-px-0 tw-text-sm tw-text-gray-900 focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 dark:tw-border-gray-600 dark:tw-text-white dark:focus:tw-border-[#ff7f00]" placeholder="Nama" required />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> -->

                    <!-- Button -->
                    @if (isset(Auth::user()->name))
                        <div class="tw-container tw-mx-auto tw-mt-5">
                            <div class="tw-mx-3">
                                <button type="submit" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange">Langkah Selanjutnya</button>
                            </div>
                        </div>
                    @else
                        <div class="tw-container tw-mx-auto tw-mt-5">
                            <p class="tw-text-poppins tw-mx-3 tw-text-base">Silahkan Login Terlebih Dahulu</p>
                            <div class="tw-mx-3">
                                <button type="submit" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange" disabled>Langkah Selanjutnya</button>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </section>
@endsection
