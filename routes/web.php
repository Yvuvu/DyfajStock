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

Route::get('/', function () {
    return view('welcome');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Routes des produits
Route::get('nouveau-produit','ProduitsController@form');
Route::view(' liste','produits.liste');
Route::get('liste_des_produits','ProduitsController@index');
Route::post('ajouter_produit', 'ProduitsController@store');
Route::get('nouveau-produit','ProduitsController@form');


// // Routes des cathegories
// Route::view('categorie','categorie.forme');
// Route::get('liste_des_categories', 'CategoriesController@liste');
// Route::post('ajouter_categorie', 'CategoriesController@store');
// Route::get('forme_categorie', 'CategoriesController@create');

// //Routes des unites
// Route::view('unite','unites.forme');
// Route::get('liste_des_unites', 'UnitesController@liste');
// Route::post('ajouter_unite', 'UnitesController@store');
// Route::get('forme_unite', 'UnitesController@create');