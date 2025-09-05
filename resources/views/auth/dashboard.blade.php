<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-blue-600 p-4 flex justify-between items-center text-white">
        <h1 class="text-xl font-bold">Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded">
                Logout
            </button>
        </form>
    </nav>

    <div class="max-w-6xl mx-auto py-12 px-6">
        <h2 class="text-2xl font-semibold mb-6">Selamat datang, {{ Auth::user()->username ?? Auth::user()->name }} 👋</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-2">Menu 1</h3>
                <p class="text-gray-600">Deskripsi singkat untuk menu pertama.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-2">Menu 2</h3>
                <p class="text-gray-600">Deskripsi singkat untuk menu kedua.</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-bold mb-2">Menu 3</h3>
                <p class="text-gray-600">Deskripsi singkat untuk menu ketiga.</p>
            </div>
        </div>
    </div>
</body>
</html>
