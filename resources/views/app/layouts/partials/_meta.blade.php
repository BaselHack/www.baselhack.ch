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

