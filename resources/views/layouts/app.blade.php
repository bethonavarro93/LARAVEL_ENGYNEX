<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Creative Multipurpose Bootstrap Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- font-family: 'Reenie Beanie', sans-serif; --}}
    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">

    {{-- font-family: 'Nunito', sans-serif; --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">

    {{-- Iconos de google --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/tiny-slider/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/aos/aos.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


</head>

<body>

    @yield('content')

    <!-- Bootstrap JS -->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Vendors -->
    <script src="{{ asset('vendor/tiny-slider/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.js') }}"></script>
    <script src="{{ asset('vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/ityped/index.js') }}"></script>
    <script src="{{ asset('vendor/tilt.js/dist/vanilla-tilt.min.js') }}"></script>

    <!-- Template Functions -->
    <script src="{{ asset('js/functions.js') }}"></script>

    <!-- chat live Tidio -->
    <script src="//code.tidio.co/tyo0mgygpu4hhymsid967rovezom0zs9.js" async></script>

</body>

</html>
