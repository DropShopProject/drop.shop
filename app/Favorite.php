<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Favorite extends Model
{
      use Notifiable;

// Look into model relationsips
// favorite has one user and favorite has one product -> relationsip
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
