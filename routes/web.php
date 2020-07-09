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

Route::get('/','AccueilController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');
Route::get('profile','UserController@showProfile')->name('profile');
Route::get('/user/{user}/edit','UserController@editProfile')->name('profileEdit');
Route::put('/user/{user}','UserController@updateProfile')->name('profileUpdate');
Route::get('produits','ProduitController@index')->name('produits');
Route::get('ventes','VenteController@index')->name('ventes');
Route::post('enregistrer-vente','VenteController@store')->name('add-ventes');
Route::get('mouvements','ProduitController@mouvements')->name('mouvements');

//Routes d'enregistrement des produits
Route::post('ajouter_produit', 'ProduitsController@store');
Route::get('nouveau-produit','ProduitsController@form');

//Routes d'ajout de produits
Route::get('entree', 'EntreeController@formulaire');
Route::post('nouvelle-entree','EntreeController@ajouter');

