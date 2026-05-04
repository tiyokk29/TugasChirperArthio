<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
{
    $chirps = \App\Models\Chirp::with('user')
        ->latest()
        ->take(50)
        ->get();

    return view('welcome', compact('chirps'));
}
}