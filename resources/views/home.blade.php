@extends('template')

@section('title', 'Dashboard')  

@section('menu')
@if(auth()->user()->role_id==1)
      <li class="nav-item active px-lg-4">
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
      <li class="nav-item px-lg-4">
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
<div class="container">
    <section id="features" class="features">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <p class="categorietitre">NOS PRODUITS PAR CATEGORIE</p>
          </div>
  
          <div class="row" data-aos="fade-left">
              @foreach($categorie as $categorie)
            <div class="col-lg-3 col-md-4">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <img src="{{ asset('assets/img/categorie.jpg') }}" class="categorie">
              <h3><a href="">{{$categorie->categorie}}</a></h3>
              </div>
            </div>
            @endforeach
          </div>
  
        </div>
      </section>
</div>
@endsection
