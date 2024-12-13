<nav class="flex flex-wrap items-center justify-between p-3 bg-sky-200 sticky top-0 z-50">
    <div class="flex items-center">
        <img src="/assets/img/logo.png" alt="Logo" class="h-16 mr-4"> <!-- Ukuran logo diperbesar -->
        <div class="text-2xl font-bold">ExpertSkincf</div> <!-- Ukuran teks juga diperbesar -->
    </div>
    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div class="toggle hidden w-full md:w-auto md:flex text-right text-bold mt-5 md:mt-0 md:border-none">
        <a href="{{ url('/') }}#home" class="block md:inline-block hover:text-sky-300 px-3 py-3 md:border-none {{ Request::is('/') ? 'bg-sky-700 rounded text-white' : '' }}">Beranda</a>
        <a href="{{ route('diagnosis.form') }}" 
        class="block md:inline-block hover:text-sky-300 px-3 py-3 md:border-none {{ Route::currentRouteName() == 'diagnosis.form' || Request::is('diagnosis*') ? 'bg-sky-700 rounded text-white' : '' }}">
         Diagnosis
        </a>
        <a href="{{ route('riwayat') }}" class="block md:inline-block hover:text-sky-300 px-3 py-3 md:border-none {{ Request::is('*#riwayat') ? 'bg-sky-700 rounded text-white' : '' }}">Riwayat</a>
    </div>

    <div class="toggle w-full text-end hidden md:flex md:w-auto px-2 py-2 md:rounded">
        @auth
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">Hello, {{ Auth::user()->name }}!</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center h-10 w-30 rounded-md bg-sky-500 hover:bg-sky-700 text-white font-medium p-2">
                        Log Out
                    </button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" class="flex items-center h-10 w-30 rounded-md bg-sky-500 hover:bg-sky-700 text-white font-medium p-2">
                Log In
            </a>
        @endauth
    </div>
</nav>
