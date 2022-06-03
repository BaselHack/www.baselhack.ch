<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
<<<<<<< HEAD

@include('app.layouts.partials._meta')
@include('app.layouts.partials._favicon')

<!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
=======
    <meta name="google-site-verification" content="utVtkZTRq2kTM3wo59vL90NzZ4Fg-UafmK7bLD3eFlo" />
    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')
>>>>>>> main
    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"/>

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

<!-- SCripts -->
<script src="{{ mix('js/app.js') }}"></script>

@if(app()->environment('production'))
    <script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer/>
@endif

@yield('scripts')
</body>
</html>
