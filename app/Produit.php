<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'categorie_id','unite_id','nom','prixUnitaire','quantiteProduit'
     ];
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function unite()
    {
        return $this->belongsTo('App\Unite');
    }

    public function entree()
    {
        return $this->hasMany('App\Entree');
    }

    public function vente()
    {
        return $this->hasMany('App\Vente');
    }
}
