@extends('layouts.app')

@section('content')
<section class="py-16 px-6 max-w-5xl mx-auto">
  <h2 class="text-3xl font-bold mb-8 text-center">Daftar Booking</h2>

  <div class="bg-white rounded-xl shadow-lg p-6 overflow-x-auto">
    <table class="min-w-full text-left border border-gray-300">
      <thead>
        <tr class="bg-yellow-100">
          <th class="py-3 px-4 border">No Booking</th>
          <th class="py-3 px-4 border">Customer</th>
          <th class="py-3 px-4 border">Meja</th>
          <th class="py-3 px-4 border">Tanggal</th>
          <th class="py-3 px-4 border">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bookings as $booking)
        <tr class="hover:bg-gray-100">
          <td class="py-2 px-4 border font-semibold">{{ $booking->no_booking }}</td>
          <td class="py-2 px-4 border">{{ $booking->customer_name }}</td>
          <td class="py-2 px-4 border">
            {{ $booking->meja->nomor_meja ?? '-' }}
            (Kapasitas: {{ $booking->meja->kapasitas ?? 'N/A' }})
          </td>
          <td class="py-2 px-4 border">{{ $booking->booking_date }}</td>
          <td class="py-2 px-4 border">
            @if($booking->booking_status === 'pending')
              <span class="text-yellow-600 font-medium">Pending</span>
            @elseif($booking->booking_status === 'confirmed')
              <span class="text-green-600 font-medium">Confirmed</span>
            @else
              <span class="text-red-600 font-medium">Canceled</span>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="mt-6 text-center">
    <a href="{{ url('/') }}" class="bg-yellow-700 hover:bg-yellow-800 text-white px-6 py-2 rounded-md">⬅ Kembali</a>
  </div>
</section>
@endsection
