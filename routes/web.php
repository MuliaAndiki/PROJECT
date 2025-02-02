<?php

use App\Http\Controllers\DashboardpictController;
use Illuminate\Support\Facades\Route;


//Rute ke Rekomendasi
Route::get('/Rekomendasi2',function(){
    return view ('Rekomendasi2');
});

Route::get('/Rekomendasi',function(){
    return view ('Rekomendasi');
});

Route:: get('/Home',function(){
    return view ('Home');
});
Route::get('/Rekomendasi2', [RekomendasiController::class,"index"]);
Route::get('/Dashboard', [DashboardpictController::class, 'index'])->name('Dashboard');
Route::get('/Rekomendasi/{id}', 'RekomendasiController@Rekomendasi');
Route ::post('/Rekomendasii/{id}', 'RekomendasiController@insertData')->name('insertData');  