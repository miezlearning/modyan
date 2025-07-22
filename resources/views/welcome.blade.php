@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div class="text-center py-20">
    <h1 class="text-4xl font-bold mb-4">Selamat Datang di MoodTracker</h1>
    <p class="text-lg text-gray-700 mb-8">Catat suasana hati dan pikiran Anda setiap hari dengan mudah.</p>
    @guest
    <!-- <a href="{{ route('login') }}" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Login</a>
    <a href="{{ route('register') }}" class="ml-4 bg-gray-500 text-white px-6 py-3 rounded hover:bg-gray-600">Register</a> -->
    <a>test </a>
    @else
    <a href="{{ route('entries.index') }}" class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">My Journal</a>
    @endguest
</div>
@endsection