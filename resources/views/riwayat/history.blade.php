@extends('layouts.landing')

@section('title', 'Riwayat Diagnosa')

@section('content')
    @include('components.navbar')

    <div class="min-h-screen bg-sky-100 py-10 px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-sky-700 text-white text-center py-6">
                <h1 class="text-3xl font-bold">Riwayat Diagnosa</h1>
                <p class="mt-2">Berikut adalah riwayat diagnosa yang telah Anda lakukan.</p>
            </div>
            <div class="p-6">
                <!-- Daftar Riwayat Diagnosa -->
                <div class="space-y-6">
                    @if($histories->isEmpty())
                        <div class="border-l-4 border-red-500 p-4 bg-gray-50 mt-6">
                            <h2 class="text-xl font-semibold text-gray-800">Belum ada riwayat diagnosa.</h2>
                        </div>
                    @else
                    @foreach($histories->sortBy('created_at') as $index => $history)
                        <div class="border-l-4 border-sky-500 p-4 bg-gray-50">
                            <h2 class="text-xl font-semibold text-gray-800">Diagnosa #{{ $index + 1 }}</h2>
                            <p class="mt-2 text-lg text-gray-700">Tanggal: {{ $history->created_at->format('d-m-Y H:i') }}</p>
                            <p class="mt-2 text-gray-700">Penyakit yang Diduga: {{ $history->disease }}</p>
                            <h3 class="mt-2 text-lg font-medium text-gray-700">Solusi:</h3>
                            <ul class="list-disc pl-5">
                                @foreach(explode("; ", $history->solution) as $solution)
                                    <li class="text-gray-700">{{ $solution }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
