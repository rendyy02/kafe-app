<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::paginate(10);
        return view('booking.index', compact('bookings'));
    }

    //proses
}
