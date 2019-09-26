<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
    <meta property="og:title" content="尚清美"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width = device-width, initial-scale = 0.8, user-scalable = no">

    <link type="text/css" rel="stylesheet" href="../wp-content/themes/interbrand/vendor/reset-css/reset.css">
    <link type="text/css" rel="stylesheet"
          href="../wp-content/themes/interbrand/vendor/owl.carousel/dist/assets/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet"
          href="../wp-content/themes/interbrand/vendor/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/customize.css">

    <!-- This site is optimized with the Yoast SEO plugin v5.9.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <link rel="canonical" href="index.html"/>
    <link rel="stylesheet" type="text/css" href="/css/index_v4.css">
    <link rel="stylesheet" type="text/css" href="/css/global_2017.css">
    <link rel='stylesheet' id='interbrand-css' href='../wp-content/themes/interbrand/css/main-ver=4.9.1.css'
          type='text/css' media='all'/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="bookmark" href="/favicon.ico" type="image/x-icon" 　/>
    @yield('css')
    <script type="text/javascript" src="../wp-content/themes/interbrand/vendor/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="/js/DD_belatedPNG.js"></script>
    <!-- / Yoast SEO plugin. -->

    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/public-cdn/jquery/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://jkwedu-new.oss-cn-beijing.aliyuncs.com/public-cdn/bootstrap/4.3/bootstrap.min.js"></script>

    <title>
        尚清美
    </title>


    <style type="text/css">
        html {
            margin-top: 0 !important;
        }

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;￿
            padding: 0 !important;
        }

        body {
            font-family: "STXihei";
            color: #333;
        }
    </style>

    <style> #mainNav.show .nav-toggle .hamburger .line2, #mainNav.show .nav-toggle .hamburger .line3 {
        margin-left: 3px;
        margin-top: -7px;
    }
    </style> <![endif]-->

    @yield('style')


</head>
<body class="en">


<div class="page-wrapper">
    @include('layout/header')

    @yield('content')

    @include('layout/footer')
</div>

<!-- injector:js -->
<!-- endinjector -->
<script type="text/javascript" src="../wp-content/themes/interbrand/vendor/isotope/dist/isotope.pkgd.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/js/main.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/js/detectmobile.js"></script>

<script type="text/javascript"
        src="../wp-content/themes/interbrand/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/vendor/animejs/lib/anime.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/vendor/bodymovin/build/player/lottie.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/js/app.js"></script>
<script type="text/javascript" src="../wp-content/themes/interbrand/js/app_front_carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        App.init();
    });
</script>

<!-- Salesfusion -->

@yield('script')
<!-- End Salesfusion -->
</body>
</html>
