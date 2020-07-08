<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function Produits(){
        return $this->hasMany('App\Produit');
    }
}