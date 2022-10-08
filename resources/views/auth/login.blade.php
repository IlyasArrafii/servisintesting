@include('public.layout.header')
<x-guest-layout>
    <div class="tw-container tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%] md:tw-max-w-full" style="background-color: #ff7f00;">
        <div class="md:tw-px-5">
            <img src="assets/img/brand/servisin.png" width="255" class="tw-m-auto md:tw-content-start">
        </div>
        <div class="tw-container tw-mt-12 tw-h-full tw-max-w-full tw-rounded-t-3xl tw-bg-white tw-p-7 tw-text-sm md:tw-max-w-full">
            <h5 class="tw-text-base tw-font-bold">Selamat Datang</h5>
            <span class="tw-text-base tw-text-gray-600">Silahkan masuk untuk melanjutkan</span>

            <div class="tw-mt-8 tw-text-center">
                <div class="tw-container tw-max-w-full md:tw-max-w-full">
                    <form method="POST" action="{{ route('login') }}" class="tw-mt-5 tw-space-y-5">
                        @csrf

                        <div class="form-group input tw-w-full">
                            <x-input id="email" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />
                            @error('email')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <x-input id="password" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                        </div>

                        <button type="submit" class="btn-block tw-w-full tw-rounded-xl tw-bg-orange-500 tw-px-10 tw-py-2.5 tw-text-white tw-duration-300 hover:tw-bg-orange-600">Masuk</button>
                    </form>
                </div>
                <!-- <div class="tw-divider tw-pt-1">atau</div>
                <div class="tw-max-w-full tw-text-center md:tw-max-w-full">
                    <div class="tw-place-content-center tw-py-2">
                        <button type="submit" class="btn-block tw-w-full tw-rounded-xl tw-bg-blue-500/100 tw-px-10 tw-py-2.5 tw-text-white tw-duration-300 hover:tw-bg-blue-600 xl:tw-w-full xl:tw-place-content-center"><i class="fa fa-google"></i> Sign Google</button>
                    </div>
                </div> -->

                <div class="tw-mb-32 tw-mt-5 tw-text-center">
                    <p class="text-center">Belum Punya Akun? <a class="tw-text-poppins tw-text-sm hover:tw-text-gray-900" href="{{ url('/register') }}">Daftar Disini</a></p>
                    <!-- @if (Route::has('password.request'))
<a class="tw-text-poppins tw-text-center tw-text-sm tw-text-gray-600 tw-underline hover:tw-text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
@endif -->
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
