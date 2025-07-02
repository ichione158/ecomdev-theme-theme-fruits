<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ogani Template">
        <meta name="keywords" content="Ogani, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title inertia>Trang chủ | Ecommerce</title>

        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('themes/theme-fruits/css/style.css') }}" type="text/css">

        @vite([
            'resources/css/app.css',
            'resources/js/app.js'
        ])

        @inertiaHead
    </head>

    <body>
        @inertia

        <!-- Js Plugins -->
        <script src="{{ asset('themes/theme-fruits/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('themes/theme-fruits/js/main.js') }}"></script>
    </body>
</html>
