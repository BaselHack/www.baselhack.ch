<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.typekit.net/klr6jbt.css">

    <!-- Styles & Scripts-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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

    @if(request()->route()->getName() != 'sponsors.index')
        @include('app.layouts.partials._sponsors')
    @endif

    @include('app.layouts.partials._newsletter')

    @include('app.layouts.partials._footer')
</div>

@yield('scripts')

@production
    @include('app.layouts.partials._analytics')

@endproduction


</body>
</html>
