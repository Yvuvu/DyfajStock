<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   
    
   protected $fillable = [
      'categorie_id','unite_id','nom','prixUnitaire','quantiteProduit'
   ];
    public function Categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function Unite()
    {
        return $this->belongsTo('App\Unite');
    }

    public function Ventes()
    {
        return $this->hasMany('App\Vente');
    }

    public function Entrees()
    {
        return $this->hasMany('App\Entree');
    }

}
