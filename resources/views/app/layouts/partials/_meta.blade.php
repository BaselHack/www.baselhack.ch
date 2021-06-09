<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@if(!empty($page))
    <meta name="robots" content="{{ $page->robots ?? '' }}">
    <title>{{ config('app.name') . ' - ' . $page->title ?? '' }}</title>
    <meta name="description" content="{{ $page->description ?? '' }}">
    <meta name="language" Content="{{ app()->getLocale() }}">
    <meta name="url" content="{{ request()->url() ?? '' }}">

    <meta property="og:locale" content="{{ app()->getLocale() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ config('app.name') . ' - ' . $page->title ?? '' }}">
    <meta property="og:description" content="{{ $page->description ?? '' }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ request()->url() ?? '' }}">
    <meta property="og:image" content="{{ $page instanceof \App\Models\Page ? $page->getImage() : null }}">

    <meta name="twitter:site" content="@BaselHack">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $page->title ?? '' }}">
    <meta name="twitter:description" content="{{ $page->description ?? '' }}">
    <meta name="twitter:image" content="{{ $page instanceof \App\Models\Page ? $page->getImage() : null }}">
@else
    <meta name="title" content="{{ config('app.name') }}">
    <meta name="robots" content="noindex,nofollow">
    <meta name="url" content="{{ request()->url() ?? '' }}">
@endif

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">

<link rel="manifest" href="{{ asset('favicons/manifest.json') }}">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff">
