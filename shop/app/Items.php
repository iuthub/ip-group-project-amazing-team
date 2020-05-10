<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    
    protected $fillable=['p_id','Name','Rtype','Acr','Status','Group','Type','Desciption','Stype','Oplan','Fplan','Bowner','ABowner','Oowner','AOowner','Innovation','AIowner','Hostedb','Region','Owninc','Countryu','Launchd','Inactived','Retired','Canceld','help','foto1','foto2','foto3','foto4','foto5'];

    public function status(){


        return $this->belongsToMany('App\Status');
      
    }
    public function group(){


        return $this->belongsToMany('App\Group');
      
    }
    public function type(){


        return $this->belongsToMany('App\Type');
      
    }
}
