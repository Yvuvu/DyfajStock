<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Entree;
use Illuminate\Database\Seeder;

class EntreeController extends Controller
{
    public function formulaire()
    {
        $produit=Produit::All();
        $entree=Entree::All();
        return view('entree', compact('produit','entree'));
    }
     public function ajouter(Request $request)
     {
        $entree = new Entree;
        $produit=Produit::all();

        $entree->produit_id=$request->produit_id;
        $entree->quantiteEntree=$request->quantiteEntree;
        $entree->dateEntree=$request->dateEntree;
        $entree->save();
        $idProduit=$request->produit_id;
        $affected=Produit::where('id',$idProduit);

        $affected->increment('quantiteProduit',$request->quantiteEntree);
        // $produit->quantiteProduit=$request->quantiteProduit->increment($request->quantiteEntree);
        // DB::table('produits')->increment('quantiteProduit');
        return redirect('/');
     }
    
    
}
