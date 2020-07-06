<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    public function produit(){
        return $this->belongsTo('App\produit');
    }
}
