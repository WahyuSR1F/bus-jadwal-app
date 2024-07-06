<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;

    //config
    protected $table = 'master-packet';
    protected $fillable = [
        'user_id',
        'description',
        'image',
        'price',
        'status',
    ];
}
