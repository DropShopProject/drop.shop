<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
      use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function getModalNameAttribute () {
        return strtolower(str_replace(' ', '', $this->product_name));
    }

        public function scraper_links() {
            return $this->hasOne('App\ScraperInput', 'id', 'links_id');
        }
}