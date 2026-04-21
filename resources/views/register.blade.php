<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-purple-500 to-indigo-600 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Register</h2>

            {{-- Validation Errors --}}
            @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('registerSave') }}" method="POST">
                @csrf
                
                {{-- Name --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Age --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Age</label>
                    <input type="number" name="age" value="{{ old('age') }}" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 @error('age') border-red-500 @enderror">
                    @error('age')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-2 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition">
                    Register
                </button>

                <div class="text-center mt-6">
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">
                        Already have an account? Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>