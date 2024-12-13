<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="/assets/img/logo.png" type="image/png">
    @vite('resources/css/app.css')
    <!-- Add FontAwesome for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-sky-500">

    <div class="min-h-screen flex items-center justify-center">
        <!-- Register Container -->
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg space-y-6">
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif

            <!-- Logo -->
            <div class="text-center">
                <img src="/assets/img/logo.png" alt="Logo" class="w-20 mx-auto mb-4">
                <h1 class="text-2xl font-bold text-gray-800">Buat Akun</h1>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" placeholder="Masukkan nama lengkap" class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    <!-- Error message for name -->
                    @if($errors->has('name'))
                        <p class="text-red-600 text-sm mt-1">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <!-- Email -->
                <div class="space-y-2 mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan email anda" class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    <!-- Error message for email -->
                    @if($errors->has('email'))
                        <p class="text-red-600 text-sm mt-1">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <!-- Password -->
                <div class="space-y-2 mt-4 relative">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="new-password" placeholder="Password minimal 8 karakter" class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    <!-- Icon to toggle password visibility -->
                    <i id="toggle-password" class="fas fa-eye absolute right-3 top-10 cursor-pointer text-gray-600"></i>
                    <!-- Error message for password -->
                    @if($errors->has('password'))
                        <p class="text-red-600 text-sm mt-1">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2 mt-4 relative">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Masukkan ulang password" class="block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                    <!-- Icon to toggle password visibility -->
                    <i id="toggle-confirm-password" class="fas fa-eye absolute right-3 top-10 cursor-pointer text-gray-600"></i>
                    <!-- Error message for password confirmation -->
                    @if($errors->has('password_confirmation'))
                        <p class="text-red-600 text-sm mt-1">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full py-3 bg-sky-500 text-white font-semibold rounded-lg hover:bg-sky-700 transition duration-300">Buat Akun</button>
                </div>
            </form>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-600 mt-4">
                Sudah Punya Akun? 
                <a href="{{ route('login') }}" class="text-sky-600 hover:underline">Login</a>
            </p>
        </div>
    </div>

    <!-- JavaScript to toggle password visibility -->
    <script>
        const togglePassword = document.getElementById('toggle-password');
        const passwordField = document.getElementById('password');
        const toggleConfirmPassword = document.getElementById('toggle-confirm-password');
        const confirmPasswordField = document.getElementById('password_confirmation');

        // Toggle password visibility
        togglePassword.addEventListener('click', function() {
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            togglePassword.classList.toggle('fa-eye-slash');
        });

        // Toggle confirm password visibility
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPasswordField.type === 'password' ? 'text' : 'password';
            confirmPasswordField.type = type;
            toggleConfirmPassword.classList.toggle('fa-eye-slash');
        });
    </script>

</body>
</html>
