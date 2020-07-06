<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScraperInput extends Model
{
    protected $table = 'scraper_input';

    protected $guarded = [];

    public function product(){
      return $this->belongsTo('App\Product', 'links_id');
    }
}