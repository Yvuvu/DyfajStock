<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;
use App\Produit;

class VenteController extends Controller
{
    function index()
    {
        $produit = Produit::all();
        $vente = Vente::all();
        return view('ventes',compact('produit', 'vente'));
    }

    function store(Request $request)
    {
        $input = $request->produit_id;

        $affected=Produit::find($input);

        if($request->quantiteVente>$affected->quantiteProduit){
            echo "<font color=\"red\"><center><em><h2>Il n'y a plus assez de $affected->nom, il en reste $affected->quantiteProduit. Veuillez revoir la quantité</h2></font> <b><a href=\"ventes\">Retour à la vente</a></b></center>";
            // echo('<script> alert("Les deux mots de passe doivent etre identiques")</script>');
        } else{

        $vente=new Vente();
        $produit=Produit::all();
        $vente->produit_id=$request->produit_id;
        $vente->quantiteVente=$request->quantiteVente;
        $vente->dateVente=$request->dateVente;
        $vente->montantAchat=$request->montantAchat;
        $vente->montantRecu=$request->montantRecu;
        $vente->save();


        $input = $request->only(['produit_id']);

        $affected=Produit::where('id', $input);

        $affected->decrement('quantiteProduit', $request->quantiteVente);
       
        return redirect()->route('ventes')->with('ok', 'vente effectuée avec succès!');}
    }
}

