<?php

namespace App\Http\Controllers;

use App\Unite;

use Illuminate\Http\Request;

class UnitesControler extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liste()
    {
        $unite = Unite::all();
        return view('unites.liste',['unite'=>$unite]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Unite $unite)
    {
        return view('unite.forme');
    }

    public function store(Request $request)
    {
        $req=new Unite();
        $req->unite=$request->unite;
        $req->save();
       return redirect ('liste_des_unites');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Unite $unite)
    {
        $unite=Unite::latest()->get();
        return view('unite.index')->withUnite('$unite');
    }
    public function edit(Unite $unite)
    {
        return view('unite.edit');
    }

    public function destroy(Unite $unite)
    {
        $Categorie->delete();
        return redirect()->route('unite.index');   
    }
}
