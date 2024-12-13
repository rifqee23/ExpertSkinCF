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
                    <!-- Riwayat Diagnosa 1 -->
                    <div class="border-l-4 border-sky-500 p-4 bg-gray-50">
                        <h2 class="text-xl font-semibold text-gray-800">Diagnosa #1</h2>
                        <p class="mt-2 text-lg text-gray-700">Tanggal: 12-12-2024</p>
                        <p class="mt-2 text-gray-700">Penyakit yang Diduga: Penyakit A</p>
                        <h3 class="mt-2 text-lg font-medium text-gray-700">Solusi:</h3>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-700">Solusi untuk Penyakit A adalah... </li>
                            <li class="text-gray-700">Langkah-langkah pencegahan lebih lanjut.</li>
                        </ul>
                        <a href="#" class="text-sky-600 mt-4 inline-block hover:text-sky-800">
                            Lihat Detail
                        </a>
                    </div>

                    <!-- Riwayat Diagnosa 2 -->
                    <div class="border-l-4 border-sky-500 p-4 bg-gray-50">
                        <h2 class="text-xl font-semibold text-gray-800">Diagnosa #2</h2>
                        <p class="mt-2 text-lg text-gray-700">Tanggal: 10-12-2024</p>
                        <p class="mt-2 text-gray-700">Penyakit yang Diduga: Penyakit B</p>
                        <h3 class="mt-2 text-lg font-medium text-gray-700">Solusi:</h3>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-700">Solusi untuk Penyakit B adalah... </li>
                            <li class="text-gray-700">Langkah-langkah pencegahan lebih lanjut.</li>
                        </ul>
                        <a href="#" class="text-sky-600 mt-4 inline-block hover:text-sky-800">
                            Lihat Detail
                        </a>
                    </div>

                    <!-- Riwayat Diagnosa 3 -->
                    <div class="border-l-4 border-sky-500 p-4 bg-gray-50">
                        <h2 class="text-xl font-semibold text-gray-800">Diagnosa #3</h2>
                        <p class="mt-2 text-lg text-gray-700">Tanggal: 08-12-2024</p>
                        <p class="mt-2 text-gray-700">Penyakit yang Diduga: Penyakit C</p>
                        <h3 class="mt-2 text-lg font-medium text-gray-700">Solusi:</h3>
                        <ul class="list-disc pl-5">
                            <li class="text-gray-700">Solusi untuk Penyakit C adalah... </li>
                            <li class="text-gray-700">Langkah-langkah pencegahan lebih lanjut.</li>
                        </ul>
                        <a href="#" class="text-sky-600 mt-4 inline-block hover:text-sky-800">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Jika tidak ada riwayat diagnosa -->
                <div class="border-l-4 border-red-500 p-4 bg-gray-50 mt-6">
                    <h2 class="text-xl font-semibold text-gray-800">Belum ada riwayat diagnosa.</h2>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
