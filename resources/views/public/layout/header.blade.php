   <!-- Header Start -->
   <header>
       <div class="tw-bg-orange mobile:tw-h-[120px]">
           <div class="tw-mx-auto tw-max-w-screen-xl tw-px-4 sm:tw-px-6 lg:tw-px-3">
               <div class="tw-font-poppins tw-flex tw-h-16 tw-items-center tw-justify-between">
                   <div class="tw-w-full sm:tw-flex-1 lg:tw-flex-1 xl:tw-flex-1 mobile:tw-mt-[50px] tablet:tw-flex-1">
                       <a class="tw-block tw-text-teal-600" href="/">
                           <img src="{{ url('assets/img/logo-header.png') }}" class="tw-h-10 tw-max-w-lg tw-items-center" alt="">
                           <span class="tw-not-sr-only tw-max-w-lg tw-text-sm tw-text-white sm:tw-sr-only lg:tw-sr-only xl:tw-sr-only tablet:tw-sr-only">
                               {{ $today }}</span>
                           @if (isset(Auth::user()->id))
                               <p class="tw-not-sr-only tw-mt-1 tw-max-w-lg tw-text-sm tw-text-white sm:tw-sr-only lg:tw-sr-only xl:tw-sr-only tablet:tw-sr-only">
                                   Selamat Datang! {{ Auth::user()->name }}</p>
                           @endif
                       </a>
                   </div>

                   <div class="md:tw-flex md:tw-items-center mobile:tw-hidden">
                       <div class="tw-items-center tw-gap-2">
                           <div class="sm:tw-flex sm:tw-gap-2">
                               <a class="tw-bg-orange-500 tw-px-7 tw-py-2.5 tw-text-white tw-transition tw-duration-300 hover:tw-text-gray-400 sm:tw-px-3.5" href="{{ url('/') }}">
                                   Beranda
                               </a>
                               @if (isset(Auth::user()->id))
                                   <a class="tw-bg-orange-500 tw-px-7 tw-py-2.5 tw-text-white tw-transition tw-duration-300 hover:tw-text-gray-400 sm:tw-px-3.5" href="{{ url('/pesanan') }}">
                                       Pesanan
                                   </a>
                               @else
                                   <a class="tw-bg-orange-500 tw-px-7 tw-py-2.5 tw-text-white tw-transition tw-duration-300 hover:tw-text-gray-400 sm:tw-px-3.5" href="{{ url('/login') }}">
                                       Pesanan
                                   </a>
                               @endif
                               @if (isset(Auth::user()->id))
                                   <a class="tw-bg-orange-500 hover:tw-bg-orange-600 tw-btn-block tw-rounded-xl tw-px-9 tw-py-2.5 tw-text-white tw-duration-300">
                                       Selamat Datang! {{ Auth::user()->name }}
                                   </a>
                               @else
                                   <a class="tw-bg-orange-500 hover:tw-bg-orange-600 tw-btn-block tw-rounded-xl tw-px-9 tw-py-2.5 tw-text-white tw-outline tw-outline-2 tw-outline-white tw-duration-300" href="{{ url('/login') }}">
                                       Masuk
                                   </a>
                               @endif
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
   <!-- Header End -->
