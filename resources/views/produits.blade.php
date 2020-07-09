@extends('template')

@section('title', 'Liste des produits')  

@section('menu')
{{-- @if(auth()->user()->role_id==1) --}}
      <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('nouveau-produit') }}">Nouveau produit</a>
      </li>
      <li class="nav-item px-lg-4">
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

      {{-- @else
      <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
    </li>
    @endif  --}}
@endsection

@section('contenu')
  
  <section class="page-section about-heading">
    
    <div class="container">
        <a href="{{ URL('nouveau-produit') }}" type="button" class="btn btn-primary ajoutproduit">Ajouter un produit</a>
        <div class="table-responsive table">
            <table id="produits" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Unité</th>
                        <th>Catégorie</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($produit as $produit)
                        <tr @if($produit->quantiteProduit==0) style="background-color: red" @endif or @if($produit->quantiteProduit<=5) style="background-color: orange" @endif>
                            <td><strong>{{ $produit->nom }}</strong></td>
                            <td class="text-dark"><strong>{{ $produit->prixUnitaire }}</strong></td>
                            
                            <td>{{ $produit->quantiteProduit}}</td>
                            
                            <td><strong>{{ $produit->unite->unite }}</strong></td>
                            <td><strong>{{ $produit->categorie->categorie }}</strong></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
