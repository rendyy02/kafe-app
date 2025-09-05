@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    {{-- Card Jumlah Produk --}}
    <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold">Produk</h3>
        <p class="text-3xl font-bold">{{ $countProducts ?? 0 }}</p>
    </div>

    {{-- Card Jumlah Booking --}}
    <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold">Booking</h3>
        <p class="text-3xl font-bold">{{ $countBookings ?? 0 }}</p>
    </div>

    {{-- Card Jumlah Meja --}}
    <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold">Meja</h3>
        <p class="text-3xl font-bold">{{ $countTables ?? 0 }}</p>
    </div>

    {{-- Card Jumlah Pelanggan --}}
    <div class="bg-white p-6 rounded shadow text-center">
        <h3 class="text-lg font-semibold">Pelanggan</h3>
        <p class="text-3xl font-bold">{{ $countCustomers ?? 0 }}</p>
    </div>
</div>
@endsection
