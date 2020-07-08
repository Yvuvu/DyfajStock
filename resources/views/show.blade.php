@extends('template')

@section('title', 'Voir un utilisateur')  

@section('menu')
{{-- @if(auth()->user()->role_id==1) --}}
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="about.html">Nouveau produit</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="about.html">Nouvelle entrée</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
      </li>
      <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('mouvements') }}">Mouvements</a>
      </li>
      <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ URL('users') }}">Utilisateurs</a>
      </li>

      {{-- @else
      <li class="nav-item px-lg-4">
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
  
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <!-- <span class="section-heading-upper">Ajouter</span> -->
              <span class="section-heading-lower">Afficher l'utilisateur</span>
            </h2>
            <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}
            
                            <div class="card-body">
                                    <div class="form-group row">
                                            <strong>Nom:</strong>
                                                        
                                        <div class="col-md-8">
                                                {{ $user->name }}
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                            <strong>Email:</strong>
            
                                        <div class="col-md-8">
                                                {{ $user->email }}
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                            <strong>Crée le:</strong>
            
                                        <div class="col-md-8">
                                                {{ $user->created_at }}
                                        </div>
                                    </div>            
           
                                    <div class="form-group row">
                                            <strong>Role:</strong>
            
                                        <div class="col-md-8">
                                                {{ $user->role->role }}
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <a type="button" class="btn btn-primary" href="{{ URL('users') }}"> Retour</a>
                                        </div>
                                    </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </main>
          </div>
        </div>
      </div>
    </div>
  </section>

  
@endsection
