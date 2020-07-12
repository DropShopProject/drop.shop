<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function show_collab_products($collab_name) {
        $shoes = Product::where('collab_name', '=', $collab_name)->get();
        if (count($shoes) < 1){
          return redirect()->route('drop-shop');
        }

        return view('collab_products')->with('shoes', $shoes); 
    }
    
    public function show_random_products() {
    	$shoes = Product::inRandomOrder()->take(9)->get();
    	return view('products')->with('shoes', $shoes);
    }
}