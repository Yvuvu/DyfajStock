<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    public function Produit(){
        return $this->belongsTo('App\Produit');
    }
}
