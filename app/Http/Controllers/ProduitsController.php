<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Categorie;
use App\Unite;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $prod = Produit::all();
        return view('nouveau-produit',['produits'=>$prod]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(produit $produit)
    {
        $categories = Categorie::get();
        $unite = Unite::get();
        
        return view('produits.forme',['categories'=>$categories],['unite'=>$unite]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        function store(Request $request){
     
            $produit=Produit::create([
                'categorie_id'=>$request->categorie_id,
                'unite_id'=>$request->unite_id,
                'nom'=>$request->nom,
                'prixUnitaire'=>$request->prixUnitaire,
                'quantiteProduit'=>$request->quantiteProduit,
                
            ]);
       
            return redirect ('nouveau-produit');
    }


    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Produit $produit)
    // {
    //     $produit=Produit::latest()->get();
    //     return view('produits.index')->withProduits('$produit');
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Produits $produit)
    // {
    //     return view('produits.edit ');
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Produits $produit)
    // {
    //     $produit->update($request->all());
    //     return redirect()->route('produits.show',$produit);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Produits $produit)
    // {
    //     $produit->delete();
    //     return redirect()->route('produits.index');   
    // }
}
