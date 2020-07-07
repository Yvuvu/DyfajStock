<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function accueil(){
        if(Auth::User()->role=='admin'){
             return view('accueil-admin');
         }
        else{
        return view('auth.login');
        }
        return redirect('/');
    }
}
