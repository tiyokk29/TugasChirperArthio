<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            'Halo Laravel!',
            'Deploy ke Laravel Cloud berhasil'
        ];

        return view('welcome', [
            'chirps' => $chirps
        ]);
    }
}