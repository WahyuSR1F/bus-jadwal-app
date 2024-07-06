<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    //config
    protected $table = 'master-supir';
    protected $fillable = [
        'name',
        'image',
        'email',
        'umur',
        'no_hp',
        'alamat',
        'type-drive',
        'status'
    ];
}
