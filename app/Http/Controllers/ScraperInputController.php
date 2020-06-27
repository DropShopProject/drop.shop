<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScraperInput;

class ScraperInputController extends Controller
{
    public function show(){
      return view('add-scraper-url');
    }

    public function add_scraper_entry(Request $request){
      ScraperInput::create([
          'url' => $request['url'],
          'collab_name' => $request['collab_name'],
      ]);

      return view('add-scraper-url');
    }
}