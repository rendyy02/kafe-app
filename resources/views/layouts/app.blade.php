<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite('resources/css/app.css')
</head>
<style>
    html, body {
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }
</style>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-colors duration-500 bg-transparent text-white">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Coffee Shop" class="h-10 w-10 rounded-full">
                <span class="text-xl font-semibold">Coffee Shop</span>
            </div>

            <!-- Menu -->
            <ul class="hidden md:flex space-x-8 font-medium">
                <li><a href="#home" class="hover:text-yellow-400 transition">Beranda</a></li>
                <li><a href="#produk" class="hover:text-yellow-400 transition">Produk</a></li>
                <li><a href="#tentang" class="hover:text-yellow-400 transition">Tentang</a></li>
                <li><a href="#kontak" class="hover:text-yellow-400 transition">Kontak</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button class="md:hidden focus:outline-none" id="menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden px-6 pb-4 space-y-2 bg-black/70" id="mobile-menu">
            <a href="#home" class="block py-2 hover:text-yellow-400">Beranda</a>
            <a href="#produk" class="block py-2 hover:text-yellow-400">Produk</a>
            <a href="#tentang" class="block py-2 hover:text-yellow-400">Tentang</a>
            <a href="#kontak" class="block py-2 hover:text-yellow-400">Kontak</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-0">
        @yield('content')
    </main>

    <script>
        const navbar = document.getElementById('navbar');
        const hero = document.getElementById('home');

        window.addEventListener('scroll', () => {
            if (window.scrollY > hero.offsetHeight - 80) {
                navbar.classList.remove('bg-transparent', 'text-white');
                navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'text-gray-900', 'shadow-md');
            } else {
                navbar.classList.remove('bg-white/80', 'text-gray-900', 'shadow-md');
                navbar.classList.add('bg-transparent', 'text-white');
            }
        });

        // Toggle Mobile Menu
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1000, // lama animasi
        once: true,     // animasi hanya sekali
    });
    </script>

</body>
</html>
