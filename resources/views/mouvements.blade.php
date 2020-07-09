@extends('template')

@section('title', 'Mouvements du stock')  

@section('menu')
@if(auth()->user()->role_id==1)
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ url('nouveau-produit') }}">Nouveau produit</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ url('entree') }}">Nouvelle entrée</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
      </li>
      <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('mouvements') }}">Mouvements</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('users') }}">Utilisateurs</a>
      </li>

      @else
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
    </li>
    @endif 
@endsection

@section('contenu')
  
  <section class="page-section about-heading">
    <div class="container">
        <div class="table-responsive table">
            <table id="produits" class="table table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Référence du mouvement</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entree as $entree)
                        <tr>
                            <td><strong>{{ $entree->dateEntree }}</strong></td>
                            <td class="text-dark"><strong>Entrée</strong></td>
                            
                            <td>{{ $entree->id}}</td>
                            
                            <td><strong>{{ $entree->produit->nom }}</strong></td>
                            <td><strong>{{ $entree->quantiteEntree }}</strong></td>

                        </tr>
                    @endforeach
                    @foreach ($sortie as $sortie)
                        <tr>
                            <td><strong>{{ $sortie->dateVente }}</strong></td>
                            <td class="text-dark"><strong>Vente</strong></td>
                            
                            <td>{{ $sortie->id}}</td>
                            
                            <td><strong>{{ $sortie->produit->nom }}</strong></td>
                            <td><strong>{{ $sortie->quantiteVente }}</strong></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
