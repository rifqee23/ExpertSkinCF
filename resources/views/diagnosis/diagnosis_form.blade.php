@extends('layouts.landing')

@section('title', 'Pilih Gejala')

@section('content')
    @include('components.navbar')

    <div class="min-h-screen bg-sky-100 py-10 px-6">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-sky-700 text-white text-center py-6">
                <h1 class="text-3xl font-bold">Pilih Gejala</h1>
                <p class="mt-2">Silakan pilih tingkat keyakinan Anda untuk setiap gejala yang tersedia.</p>
            </div>
            <form action="{{ route('diagnosis.generate') }}" method="POST" class="p-6">
                @csrf
                <div class="space-y-6">
                    @foreach($symptoms as $symptom)
                        <div class="border rounded-lg p-4 bg-gray-50 text-center">
                            <label class="block text-lg font-medium text-gray-700 mb-2">{{ $symptom->name }}</label>
                            <div class="flex justify-center items-center space-x-4">
                                <label class="flex items-center">
                                    <input type="radio" name="evidence[{{ $symptom->id }}]" value="0.0" class="text-sky-600 focus:ring-sky-500" checked>
                                    <span class="ml-2 text-gray-700">Tidak Pernah</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="evidence[{{ $symptom->id }}]" value="0.3" class="text-sky-600 focus:ring-sky-500">
                                    <span class="ml-2 text-gray-700">Ragu</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="evidence[{{ $symptom->id }}]" value="1.0" class="text-sky-600 focus:ring-sky-500">
                                    <span class="ml-2 text-gray-700">Yakin</span>
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-6 text-center">
                    <button type="submit" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-opacity-50">
                        Diagnosa
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')
@endsection
