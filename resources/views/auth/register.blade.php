@include('public.layout.header')
<x-guest-layout>
    <div class="tw-container md:tw-max-w-full tw-bg-[#ff7f00] tw-px-0 tw-pt-[5%]" style="background-color: #ff7f00;">
        <div class="md:tw-px-5">
            <img src="assets/img/brand/servisin.png" width="255" class="tw-m-auto md:tw-content-start">
        </div>
        <div class="tw-container tw-max-w-full md:tw-max-w-full tw-text-sm tw-bg-white tw-h-full tw-mt-12 tw-p-7 tw-rounded-t-3xl">
            <h5 class="tw-font-bold tw-text-base">Daftar Akun</h5>
            <span class="tw-text-gray-600 tw-text-base">Silahkan mengisi form pendaftaran</span>

            <div class="tw-mt-8 tw-text-center">
                <div class="tw-container tw-max-w-full md:tw-max-w-full">
                    <form method="POST" action="{{ route('register') }}" class="tw-space-y-5 tw-mt-5">
                        @csrf

                        <div class="form-group tw-w-full input">
                            <x-input id="name" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="text" name="name" :value="old('name')" required placeholder="Nama Lengkap" />
                        </div>
                        <div class="form-group tw-w-full input">
                            <x-input id="notelpon" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="text" name="notelpon" :value="old('notelpon')" required placeholder="No Whatsapp" />
                        </div>
                        <div class="form-group tw-w-full input">
                            <x-input id="email" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="email" name="email" :value="old('email')" required placeholder="Email" />
                        </div>
                        <div class="form-group tw-w-full input">
                            <x-input id="password" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="password" name="password" required autocomplete="new-password" placeholder="Password" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>Harap Masukkan Password Minimal 8 Karakter</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group tw-w-full input">
                            <x-input id="password_confirmation" class="tw-w-full tw-rounded tw-px-3 tw-border tw-border-gray-500 tw-pt-2 tw-pb-2 focus:tw-outline-none input active:tw-outline-none tw-block" type="password" name="password_confirmation" required placeholder="Konfirmasi Password" />
                        </div>

                        <button type="submit" class="tw-w-full tw-rounded-xl tw-bg-orange-500 tw-text-white hover:tw-bg-orange-600 tw-duration-300 tw-px-10 tw-py-2.5 btn-block">Daftar</button>
                    </form>
                </div>
                <div class="tw-text-center tw-pt-2 tw-mb-32">
                    <p class="tw-text-center">Sudah Punya Akun? <a class="tw-text-sm tw-text-[#ff7f00]" href="{{url('/login')}}">Masuk Disini</a></p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>