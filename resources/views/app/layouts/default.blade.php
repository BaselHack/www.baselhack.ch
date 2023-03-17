<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="google-site-verification" content="utVtkZTRq2kTM3wo59vL90NzZ4Fg-UafmK7bLD3eFlo"/>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->

    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')
<<<<<<< HEAD
    <!--
    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}?{{ filemtime(public_path('css/app.css')) }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"></script>
=======

    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"/>
>>>>>>> e491aa409326fb84ae86831213b958b6266bdb6a

    @yield('styles')
</head>

<body class="bg-black text-white">

<div>
    @include('app.layouts.partials._flash')
    @include('app.layouts.partials._navigation')
    <div class="max-w-screen-xl mx-auto bg-black text-white">
        @yield('content')
    </div>

    @if(request()->route()->getName() != 'sponsors.index')
        @include('app.layouts.partials._sponsors')
    @endif

    @include('app.layouts.partials._newsletter')

    @include('app.layouts.partials._footer')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

<<<<<<< HEAD
@if(app()->environment('production'))
    <!-- Codebar tracker -->
    <script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QGVQJQ0T9J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-QGVQJQ0T9J');
    </script>
@endif
=======
@production
    <script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer/>
@endproduction
>>>>>>> e491aa409326fb84ae86831213b958b6266bdb6a

@yield('scripts')
</body>
</html>
