<?php

use App\Http\Controllers\Gambarcontrol;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('gambar', [Gambarcontrol::class, 'tampilkangambar']);