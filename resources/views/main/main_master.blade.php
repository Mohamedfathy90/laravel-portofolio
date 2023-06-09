<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rasalina - Personal Portfolio HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{'front'}}/assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{'front'}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/slick.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/default.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/style.css">
        <link rel="stylesheet" href="{{'front'}}/assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

       @include('main.includes.header')

        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->


@include('main.includes.footer')




		<!-- JS here -->
        <script src="{{'front'}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{'front'}}/assets/js/bootstrap.min.js"></script>
        <script src="{{'front'}}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{'front'}}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{'front'}}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{'front'}}/assets/js/element-in-view.js"></script>
        <script src="{{'front'}}/assets/js/slick.min.js"></script>
        <script src="{{'front'}}/assets/js/ajax-form.js"></script>
        <script src="{{'front'}}/assets/js/wow.min.js"></script>
        <script src="{{'front'}}/assets/js/plugins.js"></script>
        <script src="{{'front'}}/assets/js/main.js"></script>
    </body>
</html>
