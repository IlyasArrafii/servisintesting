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

<div class="tw-container tw-mx-auto tw-mt-5">
    <div class="tw-text-center">
        <span class="tw-mx-auto tw-text-center tw-font-poppins tw-font-bold">Data Pesanan</span>
    </div>
    @foreach($detaildata as $item)
    <div class="tw-p-3">
        <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw tw-flex">
            <p class="tw-my-1 tw-px-1 tw-p-3 tw-font-poppins tw-text-sm tw-flex-1">{{$item->kode_pemesanan}}</p>
            @if($item->status == '1')
            <div class="tw-mt-2">
                <p class="tw-my-1 tw-px-3 tw-p-1 tw-text-xs tw-text-red-500 tw-font-poppins tw-border-[#FFF0B3] tw-rounded-xl tw-mr-1 tw-bg-[#FFF0B3]">Menunggu Konfirmasi</p>
            </div>
            @elseif($item->status == '2')
            <div class="tw-mt-2">
                <p class="tw-my-1 tw-px-3 tw-p-1 tw-text-xs tw-text-blue-500 tw-font-poppins tw-border-[#FFF0B3] tw-rounded-xl tw-mr-1 tw-bg-[#FFF0B3]">Konfirmasi Diterima</p>
            </div>
            @elseif($item->status == '3')
            <div class="tw-mt-2">
                <p class="tw-my-1 tw-px-3 tw-p-1 tw-text-xs tw-text-[#FA592B] tw-font-poppins tw-border-[#FFF0B3] tw-rounded-xl tw-mr-1 tw-bg-[#FFF0B3]">Mencari Teknisi</p>
            </div>
            @elseif($item->status == '4')
            <div class="tw-mt-2">
                <p class="tw-my-1 tw-px-3 tw-p-1 tw-text-xs tw-text-green-500 tw-font-poppins tw-border-[#FFF0B3] tw-rounded-xl tw-mr-1 tw-bg-[#FFF0B3]">Teknisi Datang</p>
            </div>
            @endif
        </div>
    </div>
    <div class="tw-mx-3">
        <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-shadow-md">
            <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-sm">Data Pemesanan</p>
            <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-sm">Nama Pesanan</p>
            <p class="tw-my-1 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1">{{$item->name}}</p>
            <p class="tw-my-1 tw-px-3 tw-font-extrabold tw-font-poppins tw-text-sm tw-mt-1">Alamat Pemesan</p>
            <p class="tw-my-1 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1">{{$item->alamat}}</p>
            <p class="tw-my-1 tw-px-3 tw-font-extrabold tw-font-poppins tw-text-sm tw-mt-1">Nomor Telepon</p>
            <p class="tw-my-1 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1 tw-mb-3">{{$item->notelpon}}</p>
        </div>
    </div>
</div>

<div class="tw-container tw-mx-auto">
    <div class="tw-p-3 tw-mb-10">
        <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-shadow-sm">
            <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-sm">Data Layanan</p>
            <p class="tw-my-1 tw-px-3 tw-font-poppins tw-font-extrabold tw-text-sm tw-pt-2">Layanan</p>
            <p class="tw-my-1 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1">{{$item->Layanan['nama_layanan']}}</p>
            <p class="tw-my-1 tw-px-3 tw-font-extrabold tw-font-poppins tw-text-sm tw-mt-1">Keluhan</p>
            <p class="tw-mb-3 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1">{{$item->keluhan}}</p>
        </div>
    </div>
</div>
@endforeach
<br>
<br>
<br>