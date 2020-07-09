<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class AccueilController extends Controller
{
    function index(){

        return view('accueil');
    }
}
