<!-- Fixed Nav Start -->
<nav class="tw-font-poppins tw-font-poppins tw-fixed tw-inset-x-0 tw-bottom-0 tw-flex tw-justify-between tw-rounded-t-xl tw-bg-slate-100 tw-text-sm tw-text-black sm:tw-invisible lg:tw-invisible xl:tw-invisible">

    @if (isset(Auth::user()->id))
        <a href="{{ url('/pesanan') }}" class="tw-block tw-w-full tw-py-2 tw-px-3 tw-text-center hover:tw-text-orange">
            <svg class="tw-mx-auto tw-mb-1 tw-h-8 tw-w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
            </svg>
            <div class="tw-text-sm">
                Pesanan
            </div>
        </a>
    @else
        <a href="{{ url('/login') }}" class="tw-block tw-w-full tw-py-2 tw-px-3 tw-text-center hover:tw-text-orange">
            <svg class="tw-mx-auto tw-mb-1 tw-h-8 tw-w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
            </svg>
            <div class="tw-text-sm">
                Pesanan
            </div>
        </a>
    @endif

    <a href="{{ url('/') }}" class="tw-block tw-w-full tw-py-2 tw-px-3 tw-text-center hover:tw-text-orange">
        <svg class="tw-mx-auto tw-mb-1 tw-h-8 tw-w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <div class="tw-text-sm">
            Beranda
        </div>
    </a>

    <a href="{{ url('/profil') }}" class="tw-block tw-w-full tw-py-2 tw-px-3 tw-text-center hover:tw-text-orange">
        <svg class="tw-mx-auto tw-mb-1 tw-h-8 tw-w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <div class="tw-text-sm">
            Akun
        </div>
    </a>
</nav>
<!-- Fixed Nav End -->
