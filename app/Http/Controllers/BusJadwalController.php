<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusJadwalController extends Controller
{
    public function index()
    {
        return view('bus-jadwal');
    }
}
