@include('public.layout.header')
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
</div>
<div class="tw-container">
    <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-p-3">
            <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1">
                <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-base">Data Konsumen</p>
                <div class="tw-flex tw-flex-wrap tw-my-2 tw-mt-3">
                    <div class="tw-flex tw-w-full">
                        <svg class="tw-text-center tw-ml-4 tw-my-auto" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <input type="text" name="nama" class="tw-mx-3 tw-block tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Nama" required />
                    </div>
                    <div class="tw-flex tw-w-full tw-mt-3 tw-mb-3">
                        <svg class="tw-text-center tw-ml-4 tw-my-auto" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <input type="text" name="nama" class="tw-mx-3 tw-block tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Nomor Whatsapp" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-container tw-mx-auto">
            <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-mx-3">
                <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-base">Alamat</p>
                <div class="tw-grid tw-grid-flow-row tw-auto-rows-max tw-gap-2">
                    <div class="tw-relative tw-group tw-w-full tw-mx-auto tw-px-3">
                        <input type="text" name="alamat" class="tw-block tw-px-0 tw-min-w-max tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Alamat Lengkap" required />
                    </div>
                    <div class="tw-relative tw-w-full tw-mx-auto tw-px-3">
                        <input type="text" name="kecamatan" class="tw-block tw-px-0 tw-min-w-max tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Kecamatan" required />
                    </div>
                    <div class="tw-relative tw-group tw-w-full tw-mx-auto tw-px-3">
                        <input type="text" name="kota" class="tw-block tw-px-0 tw-min-w-max tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Kota" required />

                    </div>
                    <div class="tw-relative tw-group tw-w-full tw-mx-auto tw-px-3 tw-mb-4">
                        <input type="text" name="alamat" class="tw-block tw-px-0 tw-min-w-max tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Detail Alamat (contoh: pagar putih)" required />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keluhan -->
    <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-mx-3">
            <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-base">Keluhan</p>
            <div class="tw-grid tw-grid-flow-row tw-auto-rows-max tw-gap-2 tw-mb-3">
                <div class="tw-relative tw-group tw-w-full tw-mx-auto tw-px-3">
                    <input type="text" name="alamat" class="tw-block tw-px-0 tw-min-w-max tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Alamat Lengkap" required />
                </div>
            </div>
        </div>
    </div>

    <!-- Waktu Layanan -->
    <!-- <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-mx-3">
            <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-base">Waktu Layanan</p>
            <div class="tw-grid tw-grid-cols-2 tw-mb-3">
                <div class="tw-flex tw-flex-wrap tw-my-2 tw-mt-5">
                    <div class="tw-flex">
                        <svg class="tw-text-center tw-ml-3 tw-my-auto" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                        <input type="date" name="tanggal" class="tw-mx-3 tw-block tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Nama" required />
                    </div>
                </div>
                <div class="tw-flex tw-flex-wrap tw-my-2 tw-mt-5 tw-ml-9">
                    <div class="tw-flex">
                        <svg class="tw-text-center tw-ml-3 tw-my-auto" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg>
                        <input type="time" name="waktu" class="tw-mx-3 tw-block tw-px-0 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-transparent tw-border-0 tw-border-b-2 tw-border-gray-300 tw-appearance-none dark:tw-text-white dark:tw-border-gray-600 dark:focus:tw-border-[#ff7f00] focus:tw-outline-none focus:tw-ring-0 focus:tw-border-[#ff7f00] tw-peer" placeholder="Nama" required />
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Button -->
    <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-mx-3">
            <button type="button" class="tw-w-full tw-px-3 tw-py-2 tw-text-base tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00]">Langkah Selanjutnya</button>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>