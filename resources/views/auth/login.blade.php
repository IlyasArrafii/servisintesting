@include('public.layout.header')
<x-guest-layout>
    <div class="tw-container md:tw-max-w-full tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%]" style="background-color: #ff7f00;">
        <div class="md:tw-px-5">
            <img src="assets/img/brand/servisin.png" width="255" class="tw-m-auto md:tw-content-start">
        </div>
        <div class="tw-container tw-max-w-full md:tw-max-w-full tw-text-sm tw-bg-white tw-h-full tw-mt-12 tw-p-7 tw-rounded-t-3xl">
            <h5 class="tw-font-bold tw-text-base">Selamat Datang</h5>
            <span class="tw-text-gray-600 tw-text-base">Silahkan masuk untuk melanjutkan</span>

            <div class="tw-mt-8 tw-text-center">
                <div class="tw-container tw-max-w-full md:tw-max-w-full">
                    <form method="POST" action="{{ route('login') }}" class="tw-space-y-5 tw-mt-5">
                        @csrf

                        <div class="form-group tw-w-full input">
                            <x-input id="email" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <x-input id="password" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                        </div>

                        <button type="submit" class="tw-w-full tw-rounded-xl tw-bg-orange-500 tw-text-white hover:tw-bg-orange-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block">Masuk</button>
                    </form>
                </div>
                <!-- <div class="tw-divider tw-pt-1">atau</div>
                <div class="tw-max-w-full md:tw-max-w-full tw-text-center">
                    <div class="tw-place-content-center tw-py-2">
                        <button type="submit" class="tw-w-full xl:tw-w-full xl:tw-place-content-center tw-rounded-xl tw-bg-blue-500/100 tw-text-white hover:tw-bg-blue-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block"><i class="fa fa-google"></i> Sign Google</button>
                    </div>
                </div> -->

                <div class="tw-text-center tw-mb-32 tw-mt-5">
                    <p class="text-center">Belum Punya Akun? <a class="tw-text-sm tw-text-poppins hover:tw-text-gray-900" href="{{url('/register')}}">Daftar Disini</a></p>
                    <!-- @if (Route::has('password.request'))
                    <a class="tw-underline tw-text-center tw-text-sm tw-text-poppins tw-text-gray-600 hover:tw-text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                    @endif -->
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>