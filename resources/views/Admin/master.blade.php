<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPulse</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://themewagon.github.io/elegant/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="https://themewagon.github.io/elegant/css/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="https://themewagon.github.io/elegant/#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->

        @include('Admin.partial.sidebar')

        <div class="main-wrapper">
            <!-- ! Main nav -->
            @include('Admin.partial.navbar')

            <!-- ! Main -->
            @yield('content')
            <!-- ! Footer -->
            @include('Admin.partial.footer')

        </div>
    </div>
    <!-- Chart library -->
    <script src="https://themewagon.github.io/elegant/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="https://themewagon.github.io/elegant/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="https://themewagon.github.io/elegant/js/script.js"></script>
</body>

</html>