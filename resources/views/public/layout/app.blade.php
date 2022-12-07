<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/owlcarousel/owl.theme.default.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/logo-servisin.png') }}">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet"> --}}
</head>

<body>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

    @if (Request::is('/'))
        <div class="tw-font-sans">
            @include('public.layout.header')
            @include('public.layout.partials.nav')


            @yield('content')


            @include('public.layout.footer')
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.swiper-container', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 32,
                    centeredSlides: true,
                    autoplay: {
                        delay: 3000,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                })
            })
        </script>
    @else
        <div class="tw-font-sans">
            @include('public.layout.header')
            @include('public.layout.partials.nav')


            @yield('content')


            @include('public.layout.footer')
        </div>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 32,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            })
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ url(mix('js/app.js')) }}"></script>
</body>

</html>
