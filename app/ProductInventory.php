<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProductInventory extends Model
{
    //
	  use Notifiable;

    protected $table = 'product_inventory';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'productID', 'Site_Name', 'Shoe_Size', 'in_Stock', 'Price'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}


