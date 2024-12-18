@extends('layouts.landing')

@section('title', 'Konfirmasi Tes Diagnosa')

@section('content')
    @include('components.navbar')

    <!-- Full Width Section -->
    <div class="min-h-screen bg-sky-100 flex flex-col md:flex-row items-center justify-center">
        <!-- Left Section: Text Content -->
        <div class="w-full md:w-1/2 px-8 md:px-16 py-12 flex flex-col justify-center">
            <h1 class="text-4xl md:text-5xl font-bold text-sky-700 mb-6">Konfirmasi Tes Diagnosa</h1>
            <p class="text-gray-700 text-lg mb-8 leading-relaxed">
                Apakah Anda yakin ingin memulai tes diagnosa? Tes ini akan membantu Anda mendapatkan hasil analisis kondisi kulit Anda.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('index') }}"
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-6 rounded-lg shadow-md">
                    Tidak, Kembali
                </a>
                <a href="{{ route('diagnosis.form') }}"
                    class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-lg shadow-md">
                    Ya, Mulai Tes
                </a>
            </div>
        </div>

        <!-- Right Section: Image with Overlay -->
        <div class="w-full md:w-1/2 h-screen relative overflow-hidden">
            <img src="/assets/img/home.jpg" alt="Diagnosis Image" class="w-full h-full object-cover block">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-sky-700 bg-opacity-40 flex items-center justify-center">
                <h2 class="text-white text-2xl md:text-3xl font-semibold text-center px-4">
                    "Jaga kesehatan kulit Anda dengan langkah sederhana yang tepat!"
                </h2>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
