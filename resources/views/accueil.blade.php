@extends('template')

@section('title', 'Dyfaj Stock')  

@section('menu')
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ url('/') }}">Accueil
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">Administrateur</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('login') }}">Personnel</a>
    </li>
@endsection

@section('contenu')
  
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded bodyimage" src="{{asset('assets/img/img1.jpeg')}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Gerez efficacement votre stock avec</span>
            <span class="section-heading-lower">Dyfaj<br>Stock</span>
            </h2>
            <p class="mb-3">Dyfaj Stock est une application web de gestion de stock vous proposant de nombreuses fonctionnalités (Produits, entrées/sorties, inventaires, utilisateurs, etc.) simple d'utilisation, intuitive, multiplateforme et très fonctionnelle
            </p>
            <div class="intro-button mx-auto">
            {{-- @guest                 --}}
                <a class="btn btn-primary btn-xl" href="{{ route('login') }}">{{ __('Connexion') }}</a>
            {{-- @endguest --}}
            </div>
        </div>
        </div>
    </div>
</section>
@endsection