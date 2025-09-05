<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function landing()
    {
        $bookings = Booking::all();
        return view('customer.booking', compact('bookings'));
    }

    // untuk admin
    public function index()
    {
        $bookings = Booking::with('meja')->paginate(10);
        return view('admin.booking.index', compact('bookings'));
    }
}
