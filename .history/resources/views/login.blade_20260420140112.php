<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel Authentication</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-purple-500 to-indigo-600 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md transform transition-all">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Login</h2>

            @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autofocus
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" 
                           id="password" 
                           name="password" 
                           required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-2 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition duration-300 transform hover:-translate-y-0.5 shadow-lg">
                    Login
                </button>

                <div class="text-center mt-6">
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 hover:underline transition">
                        Don't have an account? Register
                    </a>
                </div>
            </form>

            <!-- Validation Errors at the end -->
            @if ($errors->any())
            <div class="mt-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                <h3 class="text-red-800 font-semibold mb-2">Login Failed:</h3>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
</body>
</html>