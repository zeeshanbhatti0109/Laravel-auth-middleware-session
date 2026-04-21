<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel Authentication</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-purple-500 to-indigo-600 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md transform transition-all">
            <div class="text-center">
                <div class="mb-6">
                    <div
                        class="w-24 h-24 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-4xl text-white">👤</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Welcome, {{ Auth::user()->name }}!</h2>
                    <p class="text-gray-600 mt-2">{{ Auth::user()->email }}</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 mb-6 text-left">
                    <p class="text-sm text-gray-600 mb-2">
                        <span class="font-semibold">Account Created:</span>
                        {{ Auth::user()->created_at->format('F j, Y') }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-semibold">Account Status:</span>
                        <span class="text-green-600">Active ✓</span>
                    </p>
                </div>

                <!-- Go to Inner Page Button -->
                <a href="{{ route('inner') }}"
                    class="block w-full bg-red-500 text-white font-semibold py-2 rounded-lg hover:bg-green-700 transition duration-300 shadow-lg mb-3">
                    Go to Inner Page
                </a>

                <!-- Logout Button - FIXED ROUTE -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full bg-red-500 text-white font-semibold py-2 rounded-lg hover:bg-red-600 transition duration-300 transform hover:-translate-y-0.5 shadow-lg">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>