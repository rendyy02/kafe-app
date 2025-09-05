<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kafe App</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-amber-100 to-orange-200 font-sans">

    <div class="w-full max-w-md bg-white/90 backdrop-blur-md rounded-2xl shadow-xl p-8">
        <h1 class="text-2xl font-bold text-center text-amber-900 mb-6">☕ Ayo login Admin</h1>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-amber-800 font-medium mb-1">Username</label>
                <input type="text" name="username" required
                    class="w-full px-4 py-2 rounded-lg border border-amber-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-amber-800 font-medium mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 rounded-lg border border-amber-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-amber-700 hover:bg-amber-800 text-white font-semibold py-2 rounded-lg transition duration-200">
                Login
            </button>
        </form>
    </div>

</body>
</html>
