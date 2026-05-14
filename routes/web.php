<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ChirpController::class, 'index']);

Route::post('/chirps', [ChirpController::class, 'store']);