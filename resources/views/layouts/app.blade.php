<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Personal Journal')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-heycomic bg-gray-900 text-gray-100 antialiased pt-20" style="background-image: url('/path-to-modern-texture.png'); background-size: cover; background-attachment: fixed;">
    @include('layouts.partials.navbar')
    <main class="container mx-auto px-4">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
