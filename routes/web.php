<?php

use Illuminate\Support\Facades\Route;

//Rute ke dashboard
Route::get('/Dashboard', function () {
    return view('Dashboard');
});

//Rute ke rekomendasi
Route::get('/Rekomendasi',function(){
    return view ('Rekomendasi');
});
