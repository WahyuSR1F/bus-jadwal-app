<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;

    //config
    protected $table =  'master-star';
    protected $fillable = ['name', 'image'];
}
