<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekomendasiController;

//Rute ke dashboard
Route::get('/Dashboard', function () {
    return view('Dashboard');
});

//Rute ke dashboard
Route::get('/Rekomendasi2',function(){
    return view ('Rekomendasi2');
});

Route::get('/Rekomendasi', [RekomendasiController::class,"index"]);


// Rute Function
// Route::get('/Rekomendasi/{id}', 'RekomendasiController@Rekomendasi');
// Route ::post('/Rekomendasii/{id}', 'RekomendasiController@insertData')->name('insertData');  