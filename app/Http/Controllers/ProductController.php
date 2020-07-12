<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function show_collab_products($collab_name) {
        $shoes = Product::where('collab_name', '=', $collab_name)->get();

        // If there are no shoes matching the provided URL
        if (count($shoes) < 1){
          return redirect()->route('drop-shop');
        }

        // Remove hyphen from collab names that are required to match the url
        foreach ($shoes as $shoe) {
          $shoe->collab_name = str_replace('-', ' ', $shoe->collab_name);
        }

        return view('collab_products')->with('shoes', $shoes);
    }

    public function show_random_products() {
    	$shoes = Product::inRandomOrder()->take(9)->get();
    	return view('products')->with('shoes', $shoes);
    }
}
