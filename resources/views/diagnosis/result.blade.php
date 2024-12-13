@extends('layouts.landing')

@section('title', 'Hasil Diagnosa')

@section('content')
    @include('components.navbar')

    <div class="min-h-screen bg-sky-100 py-10 px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-sky-700 text-white text-center py-6">
                <h1 class="text-3xl font-bold">Hasil Diagnosa</h1>
                <p class="mt-2">Berikut adalah hasil diagnosa berdasarkan gejala yang Anda pilih.</p>
            </div>
            <div class="p-6">
                @if(count($diseases) > 0)
                    <div class="space-y-6">
                        @foreach($diseases as $disease)
                            <div class="border-l-4 border-sky-500 p-4 bg-gray-50">
                                <h2 class="text-xl font-semibold text-gray-800">{{ $disease }}</h2>
                                <h3 class="mt-2 text-lg font-medium text-gray-700">Solusi:</h3>
                                <ul class="list-disc pl-5">
                                    @if(isset($solutions[$disease]))
                                        @foreach($solutions[$disease] as $solution)
                                            <li class="text-gray-700">{{ $solution->solution }}</li>
                                        @endforeach
                                    @else
                                        <li class="text-gray-700">Tidak ada solusi yang tersedia.</li>
                                    @endif
                                </ul>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="border-l-4 border-red-500 p-4 bg-gray-50">
                        <h2 class="text-xl font-semibold text-gray-800">Tidak ada penyakit yang cocok berdasarkan gejala yang dipilih.</h2>
                    </div>
                @endif

                @if($result !== null)
                    <div class="mt-6 p-4 bg-sky-100 border-l-4 border-sky-500">
                        <h2 class="text-xl font-semibold text-gray-800">Hasil Perhitungan CF Value: <span class="text-sky-600">{{ $result }}</span></h2>
                    </div>
                @endif

                <!-- Tombol Kembali ke Home dan Tes Ulang -->
                <div class="mt-6 text-center space-x-4">
                    <!-- Tombol Kembali ke Home -->
                    <a href="{{ url('/') }}" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50">
                        Kembali ke Home
                    </a>

                    <!-- Tombol Tes Ulang -->
                    <a href="{{ route('diagnosis.form') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                        Tes Ulang
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
