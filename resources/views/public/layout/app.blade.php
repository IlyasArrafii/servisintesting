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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.4/flowbite.css" integrity="sha512-elkZAV+AOaXA1eUO68uHxh6fr2Jg9KslBUUlqdicEWTjSfSpQuLjSYbE2b3Nxh74Wih5bN3FivEt7M5hUyP87A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url(mix('css/app.css')) }}" rel="stylesheet">
</head>

<body>
    @if (Request::is('/'))
        <div class="tw-font-sans">
            @include('public.layout.header')
            @include('public.layout.partials.nav')


            @yield('content')


            @include('public.layout.footer')
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
        {{-- <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        <script src="{{ url('assets/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
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
    @endif
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.4/flowbite.js" integrity="sha512-dR970zv4VVK9MPHINc/5LX+iwaWwZHwKp90bNSwLjllYTqSYSff8slrhd1zNlljI9AlF0Bp4UkBY+s6JktPygw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.4/flowbite.min.js" integrity="sha512-UOCOBLcJEzUzlYfg7JFOkBNYhvZx3c3AsILExFFNM0WwRMlVXoK4brqgTzY7b4QqV1nH5+8OX1172fRlW9HYOA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
