@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="flex">
        @include('components.sidebar') <!-- Memanggil Sidebar -->

        <div class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Dashboard Admin</h1>
        </div>
    </div>
@endsection