<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    @include('app.layouts.partials._meta')
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <script src="https://kit.fontawesome.com/c51e7d3c3d.js" crossorigin="anonymous"></script>
    @yield('styles')
</head>

<body class="">

<div class="">

    @include('app.layouts.partials._flash')


    @include('app.layouts.partials._navigation')
  
      @yield('content')

    @include('app.layouts.partials._newsletter')

    @include('app.layouts.partials._footer')



</div>
  
  
@if(app()->environment('production'))
 <!-- Fathom - beautiful, simple website analytics -->
<script src="https://dragonfly.codebar.ch/script.js" site="VIJIXWCP" defer></script>
<!-- / Fathom -->
@endif


@yield('scripts')
</body>
</html>
