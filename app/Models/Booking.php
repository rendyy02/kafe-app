<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id_booking';

    protected $fillable = [
        'no_booking',
        'customer_name',
        'table_id',
        'booking_date',
        'booking_status',
    ];

    public function table()
    {
        return $this->belongsTo(Meja::class, 'table_id');
    }
}
