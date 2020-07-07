@extends('template')
@section('title', 'Entrée-Produit')
@section('menu')
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="produits">PRODUITS           
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('nouveau-produit')}}">NOUVEAU&nbsp;&nbsp;PRODUIT</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('nouvelle-entree')}}">NOUVELLE&nbsp;&nbsp;ENTREE</a>
        <span class="sr-only">(current)</span>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('vente')}}">VENTE</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="mouvements">MOUVEMENTS</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('utilisateurs')}}">UTILISATEURS</a>
    </li>
@endsection
@section('contenu')    
    <form method="POST" action="{{route('ajout-produit')}}" enctype="multipart/form-data"> 
        @csrf       
        <div class="input-group mb-3">                      
            <div class="input-group-prepend">               
                <label class="input-group-text" for="inputGroupSelect01">Identifiant-produit</label>
            </div>
                {{-- requete avec une boucle pour lister les idProduits de la table entrée --}}
                <select class="custom-select" id="inputGroupSelect01" name="produit_id" pattern="[^\s]">                
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
                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="quantiteEntree" pattern="[^\-]">
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