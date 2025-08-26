<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = 'mejas';
    protected $primaryKey = 'id_meja';

    protected $fillable = [
        'nama_meja',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'table_id');
    }
}
