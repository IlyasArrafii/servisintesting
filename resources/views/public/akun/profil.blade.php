@include('public.layout.header')
<div class="tw-container tw-max-w-full lg:tw-max-w-full md:tw-max-w-full tw-bg-[#ff7f00] tw-px-0 tw-rounded-b-2xl tw-shadow-md" style="background-color: #ff7f00; padding-top: 5%;">
    <div class="tw-pb-2">
        <div class="tw-text-center tw-mx-auto md:tw-mx-auto md:tw-mr-[46%] md:tw-text-center">
            <div class="tw-mx-auto">
                <span class="tw-m-auto tw-text-center tw-font-bold tw-text-white tw-font-poppins">Profil Akun</span>
            </div>
        </div>
    </div>
</div>
<div class="tw-container tw-mx-auto tw-mt-12">
    <div class="tw-mx-3">
        <div class="tw-border-[#fff] tw-rounded-xl tw-border tw-mt-1 tw-shadow-md">
            <img src="assets/img/icon1/profile.png" class="tw-mx-auto tw-pt-2 tw-mb-1" style="width: 90px;">

            <div class="tw-mx-auto ">
                <div class="tw-flex tw-flex-row">
                    <img src="assets/img/icon1/profile.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                    <span class="tw-font-poppins tw-text-sm tw-text-center tw-mt-2 tw-ml-1">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <div class="tw-mx-auto ">
                <div class="tw-flex tw-flex-row">
                    <img src="assets/img/icon1/telephone.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                    <span class="tw-font-poppins tw-text-sm tw-text-center tw-mt-2 tw-ml-1">{{ Auth::user()->notelpon }}</span>
                </div>
            </div>
            <div class="tw-mx-auto ">
                <div class="tw-flex tw-flex-row">
                    <img src="assets/img/icon1/at.png" class="tw-ml-3 tw-p-2" style="width: 35px;">
                    <span class="tw-font-poppins tw-text-sm tw-text-center tw-mt-2 tw-ml-1">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <div class="tw-container tw-mx-auto tw-mb-5 tw-mt-5">
                <div class="tw-flex tw-flex-wrap tw-mx-auto">
                    <div class="tw-flex tw-mx-16">
                        <!-- <div class="tw-mx-3 tw-mt-1">
                            <button type="submit" class="tw-w-full tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00] tw-no-underline">Edit Profil</button>
                        </div> -->
                        <div class="tw-mx-3 tw-mt-1 tw-text-center">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="tw-w-full tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00] tw-no-underline"><a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Keluar Akun') }}
                                    </a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="tw-container tw-mx-auto tw-mb-5 tw-mt-5">
                <div class="tw-flex tw-flex-wrap tw-mx-16">
                    <div class="tw-flex">
                        <div class="tw-mx-3">
                            <button type="submit" class="tw-w-full tw-px-3 tw-py-2 tw-text-sm tw-font-medium tw-text-center tw-text-white tw-bg-orange-400 tw-rounded-lg hover:tw-bg-[#ff7f00] dark:tw-bg-orange-400 dark:hover:tw-bg-[#ff7f00] tw-no-underline">Edit Profil</button>
                        </div>
                        <div class="tw-mx-3 tw-mt-1">

                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="tw-flex tw-flex-wrap tw-mt-3">
                <div class="tw-mx-auto tw-flex">
                    <div class="tw-text-sm tw-font-poppins tw-mr-[10%] tw-border tw-mx-auto tw-p-3 tw-border-gray-600 tw-bg-white tw-my-1 tw-rounded-md">
                        <a href="{{url('/')}}" class="tw-no-underline" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-text-sm tw-p-1 tw-text-red-500">
                                Edit Profil
                            </span>
                        </a>
                    </div>
                    <div class="tw-mx-auto tw-border tw-border-gray-600 tw-bg-white tw-my-1 tw-rounded-md tw-px-5">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="tw-cursor-pointer" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Keluar Akun') }}
                            </a>
                        </form>
                        <a href="{{url('/')}}" class="tw-no-underline" style="text-decoration: none;"><i class="fa-solid fa-arrow-left"></i><span class="tw-text-sm tw-p-1 tw-text-red-500">
                                Keluar Akun
                            </span>
                        </a>
                        <span class="tw-m-auto tw-text-center tw-text-sm tw-text-red-500 tw-font-poppins">Pesanan</span>
                    </div>
                </div>
                <div class="tw-text-center tw-mx-auto tw-mr-[10%] md:tw-mx-auto md:tw-mr-[46%] md:tw-text-center">

                </div>
            </div> -->
            <div class="">
                <p class="tw-my-1 tw-px-3 tw-font-poppins tw-text-sm tw-mt-1 tw-mb-3"></p>
                <p></p>
            </div>
        </div>
    </div>
</div>