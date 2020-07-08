<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\User;
use App\Entree;
use App\Vente;

class ProduitController extends Controller
{
    public function index()
    {
        $produit=Produit::all();
        return view('produits', compact('produit'));
    }

    public function mouvements()
    {
        $entree=Entree::orderby('dateEntree', 'desc')->get();
        $sortie=Vente::orderby('dateVente', 'desc')->get();
        // $mouvement=Entree::all()->join('ventes');
        return view('mouvements', compact('entree', 'sortie'));
    }
}
