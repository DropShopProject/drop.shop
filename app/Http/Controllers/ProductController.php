<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function show_product_details() {

        $nikeFreerun = Product::where('id', '=', '1')->get();

        $adidasNMD = Product::where('id', '=', '2')->get();
        
        return view('products')->with('nikeFreerun', $nikeFreerun[0])->with('adidasNMD', $adidasNMD[0]);
    }
}
 