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
          'goat_url' => $request['goat_url'],
          'fc_url' => $request['fc_url'],
          'kixify_url' => $request['kixify_url'],
          'collab_name' => $request['collab_name'],
      ]);

      return view('add-scraper-url');
    }
}