<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\categorie');
    }

    public function unite()
    {
        return $this->belongsTo('App\unite');
    }

    public function ventes()
    {
        return $this->hasMany('App\vente');
    }

    public function entrees()
    {
        return $this->hasMany('App\entree');
    }

}
