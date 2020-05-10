<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function items(){


        return $this->belongsToMany('App\Items');
      
    }
}
