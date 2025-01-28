<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rekomendasi;
use Dom\Comment;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class RekomendasiController extends Controller
{
  public function Rekomendasi($id){
    $hasil = Rekomendasi::find($id);
    $komen = comment::all();
    return view ('Rekomendasi',['hasil'=>$hasil, 'komen'=>$komen,'id'=> $id]);
  }

  public function insertData(Request $request, $id)
  {
    $faker = Faker::create();
    $hasil = RekomendasiController::find($id);
    $user = new Comment();
    $user->name = $request->nama;
    $user->comment = $request->komentar;
    $user->id_laman = $request->id;
    $user->profile_photo = $faker->imageUrl($width = 50, $height = 50);
    $user->save();
    return redirect()->action('RekomendasiController@Rekomendasi',['id'=>$id]);
  }

  public function index(){
    return view ('Rekomendasi2');
  }
}