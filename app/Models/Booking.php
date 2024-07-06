<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    //config
    protected $table = 'booking';
    protected $fillable = [
        'user_id',
        'transaksi_id',
        'bus_id',
        'wisata_id',
        'supir_id',
        'payment_id',
        'facility_id',
        'packet_id',
        'status',
    ];
}
