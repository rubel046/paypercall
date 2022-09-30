<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- TITLE -->
    <title>@yield('title', 'Appliance Repair')</title>

    <!-- Main StyleSheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style-global.css')}}" rel="stylesheet" type="text/css" />
    <!-- Color Schemes -->
    <link href="{{asset('css/style-green.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/linear.css')}}" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo-white.png')}}"><!-- Major Browsers -->

    <script src="{{asset('js/jquery.js')}}"></script>

    <link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.carousel.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.theme.css')}}" type="text/css" />
    <script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>

    <script src="{{asset('js/scripts.js')}}"></script>

    <!-- FANCYBOX -->
    <script type="text/javascript" src="{{asset('assets/lightbox/jquery.fancybox.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lightbox/jquery.fancybox.css')}}" media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>
</head>

<body>
<div id="preloder">
    <div class="loader"></div>
</div>

<div class="topbutton"><span class="lnr lnr-arrow-up"></span></div>

@include('_partials.header')
@yield('page')
@include('_partials.footer')

<script type="text/javascript">
    //scrollable links
    $(function() {
        $('a.scroll').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 94
                    }, 2000);
                    return false;
                }
            }
        });
    });
</script>
<script>
    $(window).on("load", function () {
        $("#preloder , .loader").fadeOut("slow");
    });
</script>
</body>
</html>
