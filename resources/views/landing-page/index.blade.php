@extends('layouts.landing')

@section('title', 'Landing Page')

@section('content')
    @include('components.navbar')

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('/assets/img/.jpg');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">ExpertSkincf</h1>
                <p class="text-lg md:text-xl mb-6">Sistem Pendeteksi Estetika Kulit Wnita dalam Menjaga Kesehatan</p>
                <a href="#fields" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full text-lg">Mulai Diagnosa</a>
            </div>
        </div>
    </div>

    @include('components.footer')

@endsection