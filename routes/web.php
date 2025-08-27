<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'index']);

Route::get('/booking', [BookingController::class, 'landing'])->name('booking.landing');

