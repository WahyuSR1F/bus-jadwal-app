<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'master-feedback';
    protected $fillable = ['commet', 'bus_id', 'star_id', 'supir_id', 'start_id'];
}
