<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table =  'master-payment';
    protected $fillable = [
        'name-payment',
        'image',
        'rekening',
        'description-how-to-pay'
    ];
}
