@include('public.layout.header')
<x-guest-layout>
    <div class="tw-container tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%] md:tw-max-w-full" style="background-color: #ff7f00;">
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

                        <button type="submit" class="btn-block tw-w-full tw-rounded-xl tw-bg-orange-500 tw-px-10 tw-py-2.5 tw-text-white tw-duration-300 hover:tw-bg-orange-600">Daftar</button>
                    </form>
                </div>
                <div class="tw-mb-32 tw-pt-2 tw-text-center">
                    <p class="tw-text-center">Sudah Punya Akun? <a class="tw-text-sm tw-text-[#ff7f00]" href="{{ url('/login') }}">Masuk Disini</a></p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
