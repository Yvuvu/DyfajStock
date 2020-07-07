<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    //
    public function produit(){
        return $this->belongsTo('App\Produit');
    }
}
