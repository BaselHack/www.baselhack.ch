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
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500;700&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>

<body x-data="{ navOpen: false }" class="text-white bg-gradient-to-tr from-black to-neutral-800">
    <div>
        @include('app.layouts.partials._flash')
        @include('app.layouts.partials._navigation')

        @yield('content')

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
