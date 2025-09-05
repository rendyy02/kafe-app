<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-[#3C2A21] text-white min-h-screen p-6">
        <h1 class="text-2xl font-bold mb-8">☕ Admin Panel</h1>
        <nav class="space-y-4">
            <a href="{{ route('admin.dashboard') }}" class="block hover:text-yellow-400">Dashboard</a>
            <a href="{{ route('admin.products.index') }}" class="block hover:text-yellow-400">Produk</a>
            <a href="{{ route('admin.bookings.index') }}" class="block hover:text-yellow-400">Booking</a>
            <a href="{{ route('admin.tables.index') }}" class="block hover:text-yellow-400">Meja</a>
            <a href="{{ route('admin.reports') }}" class="block hover:text-yellow-400">Laporan</a>
            <a href="{{ route('admin.settings') }}" class="block hover:text-yellow-400">Pengaturan</a>
        </nav>
    </aside>

    {{-- Konten --}}
    <div class="flex-1 flex flex-col">
        {{-- Header --}}
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h2 class="text-xl font-semibold">@yield('page-title')</h2>
            <div>
                <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                    Logout
                </button>
            </div>
        </header>

        {{-- Main --}}
        <main class="p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
