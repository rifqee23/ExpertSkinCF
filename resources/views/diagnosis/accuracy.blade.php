@extends('layouts.landing')

@section('title', 'Hasil Akurasi')

@section('content')
    @include('components.navbar')

    <div class="min-h-screen bg-sky-100 py-10 px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-sky-700 text-white text-center py-6">
                <h1 class="text-3xl font-bold">Hasil Akurasi</h1>
                <p class="mt-2">Berikut adalah hasil akurasi diagnosis yang telah dilakukan.</p>
            </div>
            <div class="p-6">
                @if(count($finalResult) > 0)
                    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Data Akurasi:</h2>
                    <ul class="space-y-4">
                        @foreach($finalResult as $entry)
                            <li class="border rounded-lg p-4 bg-gray-50">
                                <p class="text-lg text-gray-800 font-medium">
                                    <span class="font-bold text-sky-700">Penyakit:</span> {{ $entry['disease'] }}
                                </p>
                                <p class="text-gray-600">
                                    <span class="font-bold">CF:</span> {{ $entry['cf'] }}
                                </p>
                            </li>
                        @endforeach
                    </ul>

                    <p class="mt-4 text-gray-600 text-center">
                        <strong>Catatan:</strong> Untuk mendapatkan hasil yang lebih akurat, kami menyarankan Anda untuk melakukan diagnosis beberapa kali.
                    </p>
                @else
                    <p class="text-center text-gray-600 text-lg">Tidak ada data akurasi yang tersedia.</p>
                @endif

                <div class="mt-6 text-center flex flex-wrap justify-center gap-4">
                    <!-- Tombol Kembali ke Home -->
                    <a href="{{ url('/') }}" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50 w-full md:w-auto">
                        Kembali
                    </a>
                
                    <!-- Tombol Tes Ulang -->
                    <a href="{{ route('diagnosis.confirm') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 w-full md:w-auto">
                        Tes Ulang
                    </a>
                
                    <!-- Tombol Reset dan Kembali -->
                    <form action="{{ route('diagnosis.delete') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-full md:w-auto">
                            Reset dan Kembali
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
