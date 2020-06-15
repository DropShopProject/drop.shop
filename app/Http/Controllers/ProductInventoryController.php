<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProductInventory;

class ProductInventoryController extends Controller
{
    public function show_shoe_size_details() {
        $shoe_size = ProductInventory::where('productID', '=', '1')->get();
        return view('test-view')->with('shoe_size', $shoe_size[0]);
    }
}
  