<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- <html lang="en"> --}}

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>Hotel Himara - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png" />
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/css/jquery.mmenu.css">
    <link rel="stylesheet" href="/revolution/css/layers.css">
    <link rel="stylesheet" href="/revolution/css/settings.css">
    <link rel="stylesheet" href="/revolution/css/navigation.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/daterangepicker.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css"> --}}
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery.mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/daterangepicker.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('/css/responsive.css') }}">
    <!-- ========== ICON FONTS ========== -->
    <link href="/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="/fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="/https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700"
        rel="stylesheet">
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->
        {{--
        <header class="bg-white shadow"> --}}
        <!-- ========== PRELOADER ========== -->
        <div class="loader loader3">
            <div class="loader-inner">
                <div class="spin">
                    <span></span>
                    <img src="/images/logo.svg" alt="Hotel Himara">
                </div>
            </div>
        </div>
        <div class="wrapper">

        @include('layouts.navigation')
    </div>
    {{-- </header> --}}


    <!-- Page Content -->
    <main>
        @if (Session::has('error'))
            <div class="p-5">
                <div class="alert alert-success">
                    {{ Session::get('error') }}
                    @php
                        Session::forget('error');
                    @endphp
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    {{-- Footer --}}
</div>
    @include('layouts.footer')
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    {{-- Scripts --}}
    <!-- ========== JAVASCRIPT ========== -->
    <script src="/js/jquery.min.js"></script>
    <script src="/http://maps.google.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/jquery.mmenu.js"></script>
    <script src="/js/jquery.inview.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl.carousel.thumbs.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/countup.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/daterangepicker.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/smoothscroll.min.js"></script>
    <script src="/js/instafeed.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
</body>

</html>
