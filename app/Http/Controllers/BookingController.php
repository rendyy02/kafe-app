<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function landing()
    {
        $bookings = Booking::all();
        return view('booking', compact('bookings'));
    }

    //proses
}
