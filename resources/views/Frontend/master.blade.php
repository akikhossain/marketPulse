<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MarketPulse</title>

    <link rel="icon" type="image/png" href="images/favicon.png">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/bootstrap.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/magnific-popup.min.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/font-awesome.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/themify-icons.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/niceselect.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/animate.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/flex-slider.min.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/owl-carousel.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/owl-carousel.css">

    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/reset.css">
    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/style.css">
    <link rel="stylesheet" href="https://wpthemesgrid.com/themes/free/eshop/css/responsive.css">

    <style>
        .color {
            color: #F7941D
        }
    </style>
</head>

<body class="js">

    {{-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}

    @include('Frontend.partial.navbar')

    @yield('content')

    @include('Frontend.partial.footer')


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".cat-heading").click(function () {
                $(".main-category").toggle();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5c95e5cc68.js" crossorigin="anonymous"></script>
    <script data-cfasync="false"
        src="https://wpthemesgrid.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://wpthemesgrid.com/themes/free/eshop/js/jquery.min.js"></script>
    <script src="https://wpthemesgrid.com/themes/free/eshop/js/jquery-migrate-3.0.0.js"></script>
    <script src="https://wpthemesgrid.com/themes/free/eshop/js/jquery-ui.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/popper.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/bootstrap.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/colors.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/slicknav.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/owl-carousel.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/magnific-popup.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/facnybox.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/waypoints.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/finalcountdown.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/nicesellect.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/ytplayer.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/flex-slider.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/scrollup.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/onepage-nav.min.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/easing.js"></script>

    <script src="https://wpthemesgrid.com/themes/free/eshop/js/active.js"></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"84a251a1a8ea7c42","r":1,"version":"2024.1.0","token":"3248e93e0d6447329c4d6bcc351d5700"}'
        crossorigin="anonymous"></script>
</body>

</html>