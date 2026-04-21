<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Authentication</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-purple-500 to-indigo-600 min-h-screen">
    <div class="container mx-auto px-4 min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-2xl shadow-2xl p-12 max-w-2xl w-full text-center transform transition-all hover:scale-105 duration-300">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">Laravel Authentication</h1>
            <p class="text-gray-600 text-lg mb-8">Secure Authentication System</p>
            
            <div class="flex gap-4 justify-center mb-12">
                <a href="{{ route('show.login') }}" 
                   class="px-8 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Login
                </a>
                <a href="{{ route('show.register') }}" 
                   class="px-8 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition duration-300 font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Register
                </a>
            </div>

            <div class="grid grid-cols-3 gap-6 pt-8 border-t border-gray-200">
                <div class="text-center">
                    <div class="text-3xl mb-2">🔒</div>
                    <p class="text-gray-600 text-sm">Secure Login</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl mb-2">📝</div>
                    <p class="text-gray-600 text-sm">Easy Registration</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl mb-2">🚪</div>
                    <p class="text-gray-600 text-sm">Safe Logout</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>