<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    public function produit()
    {
        return $this->hasMany('App\Produit');
    }
}
