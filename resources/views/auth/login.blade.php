@include('public.layout.partials.nav')
<x-guest-layout>
    <section class="tw-min-h-screen tw-bg-orange tw-pb-16">
        <div class="tw-mx-auto tw-flex tw-h-full tw-flex-col tw-items-center tw-justify-center tw-px-4 tw-py-8 md:tw-h-screen lg:tw-py-0">
            <a href="#" class="tw-mb-6 tw-flex tw-items-center tw-text-2xl tw-font-semibold tw-text-gray-900">
                <img src="{{ url('assets/img/brand/servisin.png') }}" class="tw-mx-auto tw-h-[90px] tw-max-w-lg mobile:tw-h-[65px]" alt="">
            </a>
            <div class="tw-w-full tw-rounded-lg tw-bg-white tw-shadow sm:tw-max-w-md md:tw-mt-0 xl:tw-p-0">
                <div class="tw-font-poppins tw-mx-auto tw-space-y-4 tw-p-6 sm:tw-p-8 md:tw-space-y-6">
                    <h1 class="tw-text-xl tw-font-semibold tw-text-gray-900 md:tw-text-2xl">
                        Selamat Datang <br>
                        <span class="tw-font-poppins tw-text-sm tw-font-normal">Silahkan Masuk Untuk
                            Melanjutkan</span>
                    </h1>
                    <form method="POST" action="{{ route('login') }}" class="tw-space-y-4 md:tw-space-y-6" novalidate>
                        @csrf
                        <div>
                            <input type="email" name="email" id="email" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Email">
                            @error('email')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Password">
                        </div>
                        <div class="tw-flex tw-items-center tw-justify-between">
                            <div class="tw-flex tw-items-start">
                                {{-- <div class="tw-flex tw-h-5 tw-items-center">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="focus:tw-ring-3 tw-h-4 tw-w-4 tw-rounded tw-border tw-border-gray-300 tw-bg-gray-50 focus:tw-ring-orange" required="">
                                </div>
                                <div class="tw-ml-3 tw-text-sm">
                                    <label for="remember" class="tw-text-black">Remember me</label>
                                </div> --}}
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="tw-text-sm tw-font-medium tw-text-black hover:tw-text-orange hover:tw-no-underline">Lupa
                                    password?</a>
                            @endif
                        </div>
                        <button type="submit" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange">Masuk</button>
                        <p class="tw-font-poppins tw-text-center tw-text-sm tw-font-light tw-text-gray-500 dark:tw-text-gray-400">
                            Belum Punya Akun ? <a href="{{ url('/register') }}" class="tw-font-bold tw-text-black hover:tw-text-orange hover:tw-no-underline">Daftar
                                Disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="tw-container tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%] md:tw-max-w-full" style="background-color: #ff7f00;">
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

                        <button type="submit" class="btn-block tw-bg-orange-500 hover:tw-bg-orange-600 tw-w-full tw-rounded-xl tw-px-10 tw-py-2.5 tw-text-white tw-duration-300">Masuk</button>
                    </form>
                </div>
                <div class="tw-divider tw-pt-1">atau</div>
                <div class="tw-max-w-full tw-text-center md:tw-max-w-full">
                    <div class="tw-place-content-center tw-py-2">
                        <button type="submit" class="btn-block tw-w-full tw-rounded-xl tw-bg-blue-500/100 tw-px-10 tw-py-2.5 tw-text-white tw-duration-300 hover:tw-bg-blue-600 xl:tw-w-full xl:tw-place-content-center"><i class="fa fa-google"></i> Sign Google</button>
                    </div>
                </div>

                <div class="tw-mb-32 tw-mt-5 tw-text-center">
                    <p class="text-center">Belum Punya Akun? <a class="tw-text-poppins tw-text-sm hover:tw-text-gray-900" href="{{ url('/register') }}">Daftar Disini</a></p>
                    @if (Route::has('password.request'))
                        <a class="tw-text-poppins tw-text-center tw-text-sm tw-text-gray-600 tw-underline hover:tw-text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}
</x-guest-layout>
