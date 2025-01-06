<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class Gambarcontrol extends Controller{
  public function tampilkangambar(){
    $image = [
      'image/POSTERLANDSCAPE/One Piece.jpeg',
    ];
    return view('gambar', compact('image'));
  }
}