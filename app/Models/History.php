<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';
    protected $fillable = [
        'user_id', 
        'transaksi_id',
         'bus_id',
         'wisata_id', 
         'supir_id', 
         'payment_id', 
         'facility_id', 
         'packet_id', 
         'status'
         
    ];
}
