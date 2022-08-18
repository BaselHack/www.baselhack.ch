<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    <meta name="google-site-verification" content="utVtkZTRq2kTM3wo59vL90NzZ4Fg-UafmK7bLD3eFlo" />
    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')
    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"></script>

    @yield('styles')
</head>

<body class="bg-black text-white">

<div>
    @include('app.layouts.partials._flash')
    @include('app.layouts.partials._navigation')
    <div class="max-w-screen-xl mx-auto bg-black text-white">
        @yield('content')
    </div>
    @include('app.layouts.partials._newsletter')
    @include('app.layouts.partials._footer')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
        integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

@yield('scripts')
</body>
</html>
