<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwindcssnd.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <style>--}}
{{--      * {--}}
{{--        font-family: hack, sans-serif;--}}
{{--        font-weight: 400;--}}
{{--        font-style: normal;--}}
{{--        color: white;--}}
{{--        background-color: black;--}}
{{--      }--}}

{{--      .hack-font-bold {--}}
{{--        font-family: hack, sans-serif;--}}
{{--        font-weight: 700;--}}
{{--        font-style: normal;--}}
{{--      }--}}

{{--      .hack-font-italic {--}}
{{--        font-family: hack, sans-serif;--}}
{{--        font-weight: 400;--}}
{{--        font-style: italic;--}}
{{--      }--}}
{{--    </style>--}}
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
    <script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer></script>
@endif

@yield('scripts')
</body>
</html>
