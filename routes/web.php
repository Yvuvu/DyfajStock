<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', function(){
    return view('accueil-admin');
});
Route::get('entree', 'EntreeController@formulaire');
Route::post('nouvelle-entree','EntreeController@ajouter')->name('ajout-produit');
Route::get('mouvement','MouvementController@etat');
// Route::post('nouvelle-entree','EntreeController@create');



// Route::get('admin', 'AdminController@accueil')->middleware('admin');









// Route::post('nouvelle-entree', 'EntreeController@nouvelleentree');

// Route::get('login','LoginController@login');
// Route::get('login','HomeController@caissier');

// Route::get('/accueil-admin','HomeController@admin')->middleware('admin');

// Route::get('/', 'AccueilController@index');
// Route::get('login','HomeController@admin');
// Route::get('login','HomeController@caissier');
// Route::get('accueil','AuthController@admin');
// Route::get('accueil','AuthController@caissier');
// Route::get('produits','ProduitController@liste');
// // Route::get('produits','ProduitController@liste');
// Route::get('nouveau-produit','ProduitController@nouveau');
// Route::get('produits','ProduitController@vente');
// Route::get('produits','ProduitController@liste');
