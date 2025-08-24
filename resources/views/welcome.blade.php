@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

  {{-- Hero Section --}}
  <section id="home" class="relative h-screen bg-cover bg-center" 
           style="background-image: url('{{ asset('images/bg_home.jpg') }}');">
    <div class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white" data-aos="fade-up">
        "Kami tidak menjanjikan sempurna, tapi selalu hangat"
      </h1>
      <a href="#booking" 
         class="mt-8 bg-[#BFA17E] hover:[background-color:#9C7B5E] text-white px-6 py-3 sm:px-8 sm:py-4 rounded-full shadow-md transition"
         data-aos="zoom-in" data-aos-delay="300">
        Booking Tempat?
      </a>
    </div>
  </section>

  {{-- Produk Unggulan --}}
  <section id="produk" class="py-16 bg-gray-200 text-center px-4 sm:px-6 md:px-24">
    <h2 class="text-3xl font-semibold mb-10" data-aos="fade-up">Produk Unggulan</h2>
    
    <div class="flex flex-col sm:flex-row justify-center gap-12">
      <div data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('images/americano.png') }}" alt="Americano" 
             class="w-40 h-40 object-cover rounded-full mx-auto">
        <p class="mt-4 font-medium">Americano</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('images/latte.png') }}" alt="Latte" 
             class="w-40 h-40 object-cover rounded-full mx-auto">
        <p class="mt-4 font-medium">Latte</p>
      </div>
      <div data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('images/espresso.png') }}" alt="Espresso" 
             class="w-40 h-40 object-cover rounded-full mx-auto">
        <p class="mt-4 font-medium">Espresso</p>
      </div>
    </div>
  </section>

  {{-- Booking Button + Maskot --}}
  <section>
    <div id="booking" class="mt-10 flex flex-col sm:flex-row items-center gap-4 justify-center px-4 sm:px-0">
      <a href="#kontak" 
         class="inline-block bg-[#BFA17E] hover:[background-color:#9C7B5E] text-white px-6 py-3 sm:px-8 sm:py-4 rounded-md transition"
         data-aos="fade-right">
        Lihat daftar booking
      </a>
      <img src="{{ asset('images/maskot.png') }}" alt="maskot" class="w-full sm:w-auto h-auto max-w-xs sm:max-w-none" data-aos="fade-left">
    </div>
  </section>

  {{-- Tentang Kami --}}
  <section id="tentang" class="py-16 px-4 sm:px-12 md:px-24 flex flex-col md:flex-row items-center gap-8 bg-gray-100">
    <img src="{{ asset('images/maskot2.png') }}" alt="Mascot" class="w-40 sm:w-48 md:w-56" data-aos="zoom-in">
    
    <div class="bg-[#BFA17E] hover:[background-color:#9C7B5E] text-white p-6 sm:p-8 rounded-lg shadow-md md:flex-1 transition" data-aos="fade-left">
      <h2 class="text-2xl font-bold mb-4">Tentang Kami</h2>
      <p>
        Kami adalah rumah bagi para pecinta kopi yang mengutamakan kualitas dan ketulusan. 
        Dengan biji kopi pilihan, proses penyajian yang penuh perhatian, serta suasana yang hangat, 
        kami menghadirkan pengalaman menikmati kopi yang lebih dari sekadar minuman—melainkan sebuah momen bernilai.
      </p>
    </div>
  </section>

  {{-- Kontak & Footer --}}
  <footer id="kontak" class="bg-[#BFA17E] hover:[background-color:#9C7B5E] text-white py-12 transition">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4 sm:px-6 md:px-6">

      <!-- Kontak -->
      <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-xl font-semibold mb-4">Kontak</h3>
        <p class="flex items-center justify-center md:justify-start gap-2"><span>📞</span> +62-812-6514-3298</p>
        <p class="flex items-center justify-center md:justify-start gap-2"><span>📷</span> coffe.shop__</p>
        <p class="flex items-center justify-center md:justify-start gap-2"><span>📧</span> coffeshop@gmail.com</p>
      </div>

      <!-- Alamat -->
      <div class="text-center md:text-left" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-xl font-semibold mb-4">Alamat</h3>
        <p>
          Jl. Junti Girang 131, Bojongkunci, Kec. Pameungpeuk,<br> 
          Kabupaten Bandung, Jawa Barat 40376
        </p>
      </div>

      <!-- Logo + Hak Cipta -->
      <div class="flex flex-col items-center md:items-end justify-center" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-40 mb-2">
        <p class="text-sm">&copy; 2025 Coffee Shop</p>
      </div>
    </div>
  </footer>

@endsection
