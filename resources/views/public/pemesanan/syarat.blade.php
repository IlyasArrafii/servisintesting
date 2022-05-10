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
@foreach($pemesanan as $item)
<form action="{{url('/checkout')}}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$item->id}}">

    <div class="tw-container tw-mx-auto tw-mt-5">
        <div class="tw-mx-3">
            <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1">
                <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-base">Ketentuan Pelayanan</p>
                <p class="tw-my-1 tw-px-3 tw-pt-3 tw-font-extrabold tw-font-poppins tw-text-sm tw-text-justify tw-mb-3">{{$item->Layanan['syarat']}}</p>
            </div>
        </div>
    </div>


    <div class="tw-container tw-mx-auto">
        <div class="tw-p-3 tw-mb-10">
            <div class="tw-border-[#fff] tw-bg-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-shadow-sm">
                <p class="tw-mt-2 tw-mb-3 tw-px-3 tw-pt-3 tw-font-poppins tw-text-sm tw-text-justify">Dengan mengklik tombol pesan, anda telah menyetuji syarat dan ketentuan kami</p>
            </div>
        </div>
    </div>

    <div class="tw-container tw-mx-auto tw-mb-5">
        <div class="tw-flex tw-flex-wrap">
            <div class="tw-flex">
                <div class="tw-mx-3">
                    <button type="submit" class="tw-w-full tw-px-3 tw-py-2 tw-text-base tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00] tw-no-underline">Pesan Sekarang</button>
                </div>
                <div class="tw-mx-3">
                    <a href="{{url('/batal-pemesanan/'.$item->id.'')}}" type="submit" class="tw-w-full tw-px-3 tw-py-2 tw-text-base tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00] tw-no-underline">Batalkan Pemesanan</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
<br>
<br>
<br>