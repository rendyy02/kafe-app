<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MejaController;

/*
|--------------------------------------------------------------------------
| Route untuk Customer (Landing Page & Booking)
|--------------------------------------------------------------------------
*/
Route::get('/', [PageController::class, 'index'])->name('landing');

// Booking untuk customer (lihat daftar booking / buat booking baru)
Route::get('/booking', [BookingController::class, 'landing'])->name('booking.landing');


/*
|--------------------------------------------------------------------------
| Route untuk Authentication
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Route untuk Admin (Dashboard & CRUD)
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD Booking
    Route::resource('booking', BookingController::class)
        ->except(['show'])  // show tidak perlu untuk admin
        ->names([
            'index' => 'admin.booking.index',
            'create' => 'admin.booking.create',
            'store' => 'admin.booking.store',
            'edit' => 'admin.booking.edit',
            'update' => 'admin.booking.update',
            'destroy' => 'admin.booking.destroy',
        ]);

    // CRUD Produk
    Route::resource('produk', ProdukController::class)
        ->except(['show'])
        ->names([
            'index' => 'admin.produk.index',
            'create' => 'admin.produk.create',
            'store' => 'admin.produk.store',
            'edit' => 'admin.produk.edit',
            'update' => 'admin.produk.update',
            'destroy' => 'admin.produk.destroy',
        ]);

    // CRUD Meja
    Route::resource('meja', MejaController::class)
        ->except(['show'])
        ->names([
            'index' => 'admin.meja.index',
            'create' => 'admin.meja.create',
            'store' => 'admin.meja.store',
            'edit' => 'admin.meja.edit',
            'update' => 'admin.meja.update',
            'destroy' => 'admin.meja.destroy',
        ]);
});
