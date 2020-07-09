@extends('template')
@section('title', 'Entrée-Produit')
@section('menu')
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
        <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('nouveau-produit') }}">Nouveau produit</a>
    </li>
    <li class="nav-item  active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('entree') }}">Nouvelle entrée</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('mouvements') }}">Mouvements</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('users') }}">Utilisateurs</a>
    </li>
@endsection
@section('contenu')   
    <h2 style="color:blueviolet">AJOUTER UN PRODUIT</h2>
    <form method="POST" action="{{url('nouvelle-entree')}}" enctype="multipart/form-data"> 
        @csrf       
        <div class="input-group mb-3">                      
            <div class="input-group-prepend">               
                <label class="input-group-text" for="inputGroupSelect01">Identifiant-produit</label>
            </div>
                {{-- requete avec une boucle pour lister les idProduits de la table entrée --}}
                <select class="custom-select" id="inputGroupSelect01" name="produit_id" pattern="[\s]">                
                <option selected></option>
                @foreach($produit as $produit)
                <option value="{{$produit->id}}">{{$produit->nom}}</option>                
                @endforeach            
            </select>            
        </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Quantité</span>
                </div>
                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="quantiteEntree" pattern="[0-9]+">
        </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Date d'entrée</span>
                </div>
                <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="dateEntree">
        </div>
        <input class="btn btn-primary" type="submit" value="Ajouter">
        <input class="btn btn-primary" type="reset" value="Annuler">
    </form>    
@endsection