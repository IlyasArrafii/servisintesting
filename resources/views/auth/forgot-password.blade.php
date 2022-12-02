@include('public.layout.partials.nav')
<x-guest-layout>
    <section class="tw-bg-orange tw-min-h-screen tw-pt-24 tw-pb-24 mobile:tw-pt-16 mobile:tw-pb-16">
        <div class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-px-4 tw-py-8 tw-h-full tw-mx-auto md:tw-h-screen lg:tw-py-0">
            <a href="#" class="tw-flex tw-items-center tw-mb-6 tw-text-2xl tw-font-semibold tw-text-gray-900">
                <img src="src/img/logo-header.png" class="tw-h-[90px] mobile:tw-h-[65px] tw-max-w-lg tw-mx-auto" alt="">
            </a>
            <div class="tw-w-full tw-bg-white tw-rounded-lg tw-shadow md:tw-mt-0 sm:tw-max-w-md xl:tw-p-0">
                <div class="tw-p-6 tw-space-y-4 tw-mx-auto md:tw-space-y-6 sm:tw-p-8 tw-font-poppins">
                    <h1 class="tw-text-xl tw-font-semibold tw-text-gray-900 md:tw-text-2xl">
                        Reset Password <br>
                        <span class="tw-text-sm tw-font-poppins tw-font-normal">Silahkan isi email untuk ganti password
                            anda</span>
                    </h1>
                    <form class="tw-space-y-4 md:tw-space-y-6" action="#">
                        <div>
                            <input type="email" name="email" id="email" class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg focus:tw-ring-orange focus:tw-border-orange tw-block tw-w-full tw-p-2.5" required placeholder="Email">
                        </div>
                        <button type="submit" class="tw-w-full tw-text-white tw-bg-orange hover:tw-bg-orange/90 focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-orange tw-font-medium tw-rounded-lg tw-text-sm tw-px-5 tw-py-2.5 tw-text-center">Email
                            Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
