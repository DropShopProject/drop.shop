<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Favorite;

class FavoriteController extends Controller
{
   public function show_favorite_details() {
    	$favorite = Favorite::where('userID', '=', '1')->get();
    	return view('test-view')->with('favorite', $favorite[0]);
    }
}
