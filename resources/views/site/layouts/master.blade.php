<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div class="page-loader"></div>
                </div>
            </div>
        </div>
    </div>

    @include('site.partials.header')

    <main class="main">
        @yield('content')
    </main>

    @include('site.partials.footer')

    <!--Vendors Scripts-->
    <script src="/site/js/jquery-3.7.1.min.js"></script>
    <script src="/site/js/jquery-migrate-3.3.0.min.js"></script>
    <script src="/site/js/bootstrap.bundle.min.js"></script>
    <!--Other-->
    <script src="/site/js/magnific-popup.js"></script>
    <script src="/site/js/perfect-scrollbar.min.js"></script>
    <script src="/site/js/swiper-bundle.min.js"></script>
    <script src="/site/js/slick.js"></script>
    <script src="/site/js/jquery.carouselTicker.js"></script>
    <script src="/site/js/masonry.min.js"></script>
    <script src="/site/js/scrollup.js"></script>
    <script src="/site/js/wow.js"></script>
    <script src="/site/js/waypoints.js"></script>
    <script src="/site/js/jquery.appear.js"></script>
    <script src="/site/js/jquery.odometer.min.js"></script>
    <script src="/site/js/bootstrap-datepicker.js"></script>
    <script src="/site/js/dark.js"></script>
    <!-- Count down-->
    <script src="/site/js/jquery.countdown.min.js"></script>
    <script src="/site/js/noUISlider.js"></script>
    <script src="/site/js/slider.js"></script>
    <!--Custom script for this template-->
    <script src="/site/js/maine209.js?v=1.0.0"></script>

    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

    @stack('scripts')

</body>

</html>
