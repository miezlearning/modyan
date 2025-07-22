<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Personal Journal')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900 antialiased">
    <nav class="bg-white shadow mb-8">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-semibold">MoodTracker</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Home</a>
                @auth
                    <a href="{{ route('entries.index') }}" class="text-gray-600 hover:text-gray-900">Entries</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">@csrf <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button></form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
    <main class="container mx-auto px-4">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
