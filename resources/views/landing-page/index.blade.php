@extends('layouts.landing')

@section('title', 'Landing Page')

@section('content')
    @include('components.navbar')


    <!-- Hero Section -->
    <div id="home" class="relative bg-cover bg-center h-screen" style="background-image: url('/assets/img/home.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-sky-700 bg-opacity-50"></div>
        <!-- Content -->
        <div class="flex items-center justify-center h-full relative z-10 animate-fade-up">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">ExpertSkincf</h1>
                <p class="text-lg md:text-xl mb-6">Sistem Pendeteksi Estetika Kulit Wanita dalam Menjaga Kesehatan</p>
                <a href="{{ route('diagnosis.confirm') }}" class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-3 px-6 rounded-full text-lg">Mulai Diagnosa</a>
            </div>
        </div>
    </div>

    <!-- Features -->
    <section id="feature" class="bg-bookmark-white py-20 mt-20 lg:mt-5 px-4 md:px-8 lg:px-16">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2 animate-fade-up">
            <h1 class="text-3xl text-center text-bookmark-blue">Features</h1>
            <p class="text-center text-bookmark-grey mt-4">
                ExpertSkinCF adalah sistem inovatif yang dirancang untuk membantu wanita menjaga kesehatan kulit dengan pendekatan berbasis kecerdasan buatan. Sistem ini memberikan analisis estetika kulit secara cepat, akurat, dan mudah digunakan.
            </p>
        </div>

        <!-- Feature #1 -->
        <div class="relative mt-20 lg:mt-24 animate-fade-up">

            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24 mx-auto">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-1.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Analisis Akurat</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Dengan menggunakan metode Case-Based Reasoning (CBR) dan Forward Chaining, ExpertSkinCF mampu memberikan analisis mendalam tentang kondisi kulit Anda. Data yang dihasilkan dijamin akurat untuk membantu menjaga kesehatan kulit secara optimal.
                    </p>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="hidden lg:block overflow-hidden bg-sky-700 rounded-r-full absolute h-80 w-2/4 -bottom-24 -left-36"></div>
        </div>

        <!-- Feature #2 -->
        <div class="relative mt-20 lg:mt-52 animate-fade-up">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24 mx-auto">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-2.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-bookmark-blue">Kemudahan Penggunaan</h1>
                    <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        ExpertSkinCF dirancang dengan antarmuka yang ramah pengguna. Anda dapat memulai analisis kulit Anda tanpa perlu mendaftar. Platform ini memastikan pengalaman pengguna yang mulus dan tanpa hambatan.
                    </p>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="hidden lg:block overflow-hidden bg-sky-700 rounded-l-full absolute h-80 w-2/4 -bottom-24 -right-0"></div>
        </div>

        <!-- Feature #3 -->
        <div class="relative mt-20 lg:mt-52 animate-fade-up">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24 mx-auto">
                <!-- Image -->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="assets/img/illustration-features-tab-3.png" alt="" />
                </div>
                <!-- Content -->
                <div class="flex flex-1 flex-col items-center lg:items-start text-center lg:text-left">
                    <h1 class="text-3xl text-bookmark-blue">Hasil Cepat dan Mudah Dibagikan</h1>
                    <p class="text-bookmark-grey my-4 sm:w-3/4 lg:w-full">
                        Hasil analisis kulit dapat dengan mudah diakses dan dibagikan melalui tautan yang dihasilkan. Ini mempermudah kolaborasi dengan ahli kecantikan atau untuk mendapatkan pendapat kedua dengan cepat.
                    </p>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="hidden lg:block overflow-hidden bg-sky-700 rounded-r-full absolute h-80 w-2/4 -bottom-24 -left-36"></div>
        </div>
    </section>

    <!-- Seksi Tim Kami -->
    <section id="team" class="py-20 mt-40 px-4 md:px-8 lg:px-16 bg-sky-700">
        <!-- Judul -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2 animate-fade-up">

            <h1 class="text-3xl text-center text-white font-bold">Tim Kami</h1>
            <p class="text-center text-white mt-4">
                Kenali para profesional berdedikasi yang ada di balik kesuksesan kami. Tim kami penuh semangat, terampil, dan berkomitmen untuk memberikan yang terbaik.
            </p>
        </div>


        <!-- Kartu Tim -->
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 max-w-screen-lg mt-16 mx-auto">
            <!-- Anggota Tim -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:translate-y-[-10px] animate-fade-up">
                <div class="w-full overflow-hidden flex justify-center pt-6">
                    <img src="assets/img/arkaan.png" alt="Anggota Tim 1" class="w-24 h-24 sm:w-32 sm:h-32 object-cover rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-sky-700">M. Faruq Arkaan</h3>
                    <p class="text-sky-600 font-light">Front - End</p>
                    <p class="mt-4 text-gray-600">"Di bumi, selalu ada seseorang yang hanya bisa di kagumi tapi tidak bisa dimiliki."</p>
                </div>
            </div>
            <!-- Anggota Tim 2 -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:translate-y-[-10px] animate-fade-up">
                <div class="w-full overflow-hidden flex justify-center pt-6">
                    <img src="assets/img/yunnisa.png" alt="Anggota Tim 2" class="object-top w-24 h-24 sm:w-32 sm:h-32 object-cover rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-sky-700">Yunnisa Diah Pratiwi</h3>
                    <p class="text-sky-600 font-light">Front - End</p>
                    <p class="mt-4 text-gray-600">"Life is too short to stress, just say 'kocak kocak' and leave."</p>
                </div>
            </div>
            <!-- Anggota Tim 3 -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:translate-y-[-10px] animate-fade-up">
                <div class="w-full overflow-hidden flex justify-center pt-6">
                    <img src="assets/img/rifqi.png" alt="Anggota Tim 3" class="w-24 h-24 sm:w-32 sm:h-32 object-cover rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-sky-700">M. Rifqi Febrianto</h3>
                    <p class="text-sky-600 font-light">Back - End</p>
                    <p class="mt-4 text-gray-600">"Hiduplah dengan autentik, jangan menjadi tiruan dari orang lain."</p>
                </div>
            </div>
            <!-- Anggota Tim 4 -->
            <div class="flex flex-col items-center bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:translate-y-[-10px] animate-fade-up">
                <div class="w-full overflow-hidden flex justify-center pt-6">
                    <img src="assets/img/joe.png" alt="Anggota Tim 4" class="object-top w-24 h-24 sm:w-32 sm:h-32 object-cover rounded-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-sky-700">Joe Febrian Sinuraya</h3>
                    <p class="text-sky-600 font-light">Back - End</p>
                    <p class="mt-4 text-gray-600">"Jadilah cahaya bagi dirimu sendiri dan bagi orang lain."</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
    
@endsection
