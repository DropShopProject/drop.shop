<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function show_product_details() {

        $TestShoe = Product::where('id', '=', '1')->get();
        $travisShoes = Product::where('productName', '=', 'TRAVIS')->get();

        return view('products')->with('TestShoe', $TestShoe[0]);
        //return view('travisscott')->with('travisShoes', $travisShoes[0]);
    }

    public function show_collab_products($collab_name) {
        $shoes = Product::where('collab_name', '=', $collab_name)->get();
  
        return view('collab_products')->with('shoes', $shoes);
    }

}
 