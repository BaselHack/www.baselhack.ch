<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width, Width">
    @include('app.layouts.partials._meta')
    @include('app.layouts.partials._favicon')
    <link href="{{ mix('css/styles.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>

<div>
    @include('app.layouts.partials._flash')
    @include('app.layouts.partials._navigation')
    <div class="max-w-screen-xl mx-auto">
    @yield('content')
    </div>
    @include('app.layouts.partials._newsletter')
    @include('app.layouts.partials._footer')
</div>

<script src="{{ mix('js/app.js')}}" defer></script>

@if(app()->environment('production'))
    <script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer></script>
@endif

@yield('scripts')
</body>
</html>
