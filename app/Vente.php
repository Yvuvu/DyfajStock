<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    //
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
}
