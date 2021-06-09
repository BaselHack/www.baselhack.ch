<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('app.layouts.partials._meta')
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>

<body class="bg-gray-100 mx-auto max-w-4xl px-12">
@include('app.layouts.partials._navigation')

@if (flash()->message)
<div class="mb-4 bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md {{ flash()->class }}" role="alert">
    <div class="flex items-center">
        <div class="flex pr-2">
            <i class="fad fa-check fa-lg"></i>
        </div>
        <div class="flex">
            <p class="">{{ session()->get('contact_message') }}</p>
        </div>
    </div>
</div>
@endif

@yield('content')
@include('app.layouts.partials._footer')

@if(app()->environment('production'))
 <!-- Fathom - beautiful, simple website analytics -->
<script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer></script>
<!-- / Fathom -->
@endif

@yield('scripts')
</body>
</html>
