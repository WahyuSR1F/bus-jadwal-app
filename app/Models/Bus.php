<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    //config
    protected $table = 'master-bus';
    protected $fillable = [
        'name',
        'type',
        'capacity',
        'facility',
        'price',
        'image',
        'description',
        'location',
        'status'
    ];
}
