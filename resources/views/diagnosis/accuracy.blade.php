@extends('layouts.landing')

@section('content')
    <h1>Hasil Akurasi</h1>

    @if(count($finalResult) > 0)
        <h2>Data Akurasi:</h2>
        <ul>
            @foreach($finalResult as $entry)
                <li>
                    Penyakit: {{ $entry['disease'] }} - CF: {{ $entry['cf'] }} 
                </li>
            @endforeach
        </ul>
        
        <!-- Form untuk menghapus file JSON dan kembali -->
        <form action="{{ route('diagnosis.delete') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                Reset dan Kembali
            </button>
        </form>
        
        
    @else
        <p>Tidak ada data akurasi yang tersedia.</p>
    @endif
@endsection
