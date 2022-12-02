@include('public.layout.partials.nav')
<x-guest-layout>
    <!-- Register View Start -->
    <section class="tw-min-h-screen tw-bg-orange tw-pb-24 tw-pt-24 mobile:tw-pt-1 mobile:tw-pb-16">
        <div class="tw-mx-auto tw-flex tw-h-full tw-flex-col tw-items-center tw-justify-center tw-px-4 tw-py-8 md:tw-h-screen lg:tw-py-0">
            <a href="#" class="tw-mb-6 tw-flex tw-items-center tw-text-2xl tw-font-semibold tw-text-gray-900">
                <img src="{{ url('assets/img/brand/servisin.png') }}" class="tw-mx-auto tw-h-[90px] tw-max-w-lg mobile:tw-h-[65px]" alt="">
            </a>
            <div class="tw-w-full tw-rounded-lg tw-bg-white tw-shadow sm:tw-max-w-md md:tw-mt-0 xl:tw-p-0">
                <div class="tw-font-poppins tw-mx-auto tw-space-y-4 tw-p-6 sm:tw-p-8 md:tw-space-y-6">
                    <h1 class="tw-text-xl tw-font-semibold tw-text-gray-900 md:tw-text-2xl">
                        Daftar Akun <br>
                        <span class="tw-font-poppins tw-text-sm tw-font-normal">Silahkan mengisi form pendaftaran
                            akun</span>
                    </h1>
                    <form class="tw-space-y-4 md:tw-space-y-6" action="#">
                        <div>
                            <input type="text" name="name" id="name" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Nama Lengkap">
                        </div>
                        <div>
                            <input type="text" name="nomor" id="nomor" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Nomor WhatsApp">
                        </div>
                        <div>
                            <input type="email" name="email" id="email" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Email">
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Password Min. 8 Karakter">
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="tw-block tw-w-full tw-rounded-lg tw-border tw-border-gray-300 tw-bg-gray-50 tw-p-2.5 tw-text-gray-900 focus:tw-border-orange focus:tw-ring-orange sm:tw-text-sm" required placeholder="Konfirmasi Password">
                        </div>
                        <button type="submit" class="tw-w-full tw-rounded-lg tw-bg-orange tw-px-5 tw-py-2.5 tw-text-center tw-text-sm tw-font-medium tw-text-white hover:tw-bg-orange/90 focus:tw-outline-none focus:tw-ring-4 focus:tw-ring-orange">Daftar</button>
                        <p class="tw-font-poppins tw-text-center tw-text-sm tw-font-light tw-text-gray-500 dark:tw-text-gray-400">
                            Sudah Punya Akun ? <a href="{{ url('/login') }}" class="tw-font-bold tw-text-black hover:tw-text-orange hover:tw-no-underline">Masuk
                                Disini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Register View End -->

    {{-- <div class="tw-container tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%] md:tw-max-w-full" style="background-color: #ff7f00;">
        <div class="md:tw-px-5">
            <img src="assets/img/brand/servisin.png" width="255" class="tw-m-auto md:tw-content-start">
        </div>
        <div class="tw-container tw-mt-12 tw-h-full tw-max-w-full tw-rounded-t-3xl tw-bg-white tw-p-7 tw-text-sm md:tw-max-w-full">
            <h5 class="tw-text-base tw-font-bold">Daftar Akun</h5>
            <span class="tw-text-base tw-text-gray-600">Silahkan mengisi form pendaftaran</span>

            <div class="tw-mt-8 tw-text-center">
                <div class="tw-container tw-max-w-full md:tw-max-w-full">
                    <form method="POST" action="{{ route('register') }}" class="tw-mt-5 tw-space-y-5">
                        @csrf

                        <div class="form-group input tw-w-full">
                            <x-input id="name" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="text" name="name" :value="old('name')" placeholder="Nama Lengkap" />
                            @error('name')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group input tw-w-full">
                            <x-input id="notelpon" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="text" name="notelpon" :value="old('notelpon')" placeholder="No Whatsapp" />
                            @error('notelpon')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group input tw-w-full">
                            <x-input id="email" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="email" name="email" :value="old('email')" placeholder="Email" />
                            @error('email')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group input tw-w-full">
                            <x-input id="password" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="password" name="password" autocomplete="new-password" placeholder="Password Minimal 8 Karakter" />
                            @error('password')
                                <div class="tw-mt-2 tw-text-left tw-text-sm tw-text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group input tw-w-full">
                            <x-input id="password_confirmation" class="input tw-block tw-w-full tw-rounded tw-border tw-border-gray-500 tw-px-3 tw-pt-2 tw-pb-2 focus:tw-outline-none active:tw-outline-none" type="password" name="password_confirmation" placeholder="Konfirmasi Password" />
                        </div>

                        <button type="submit" class="btn-block tw-bg-orange-500 hover:tw-bg-orange-600 tw-w-full tw-rounded-xl tw-px-10 tw-py-2.5 tw-text-white tw-duration-300">Daftar</button>
                    </form>
                </div>
                <div class="tw-mb-32 tw-pt-2 tw-text-center">
                    <p class="tw-text-center">Sudah Punya Akun? <a class="tw-text-sm tw-text-[#ff7f00]" href="{{ url('/login') }}">Masuk Disini</a></p>
                </div>
            </div>
        </div>
    </div> --}}
</x-guest-layout>
