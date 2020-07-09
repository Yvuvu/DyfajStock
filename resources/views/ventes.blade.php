@extends('template')

@section('title', 'Ventes')  

@section('menu')
@if(auth()->user()->role_id==1)
      <li class="nav-item px-lg-4">
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
      <li class="nav-item active px-lg-4">
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
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{ route('ventes') }}">Vente</a>
    </li>
    @endif 
@endsection

@section('contenu')
  
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <!-- <span class="section-heading-upper">Ajouter</span> -->
              <span class="section-heading-lower">Vendre un produit</span>
            </h2>
            <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}
            
                            <div class="card-body">
                                <form id="formulaire"  action="{{ route('add-ventes') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                
                                    <div class="form-group row">
                                        <label for="produit" class="col-md-4 col-form-label text-md-right">{{ __('Produit') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="produit" class="form-control" name="produit_id" pattern="[^\s]" required autocomplete="produit_id">
                                                <option selected></option>
                                                @foreach ($produit as $produit)
                                                
                                                <option value="{{$produit->id}}">{{$produit->nom}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="prixUnitaire" class="col-md-4 col-form-label text-md-right">{{ __('Prix unitaire') }}</label>
                                        
                                        <div class="col-md-6">
                                            <input id="prixUnitaire" type="number" class="form-control @error('prix unitaire') is-invalid @enderror" name="prixUnitaire" pattern="^[\(-\+]" required autocomplete="prixUnitaire" autofocus onblur="calculvente()">
            
                                            @error('prixUnitaire')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><span>F CFA</span> 
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="quantiteVente" class="col-md-4 col-form-label text-md-right">{{ __('Quantite') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="quantiteVente" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantiteVente" value="{{ old('quantiteVente') }}" required autocomplete="quantiteVente" autofocus onblur="calculvente()">
            
                                            @error('quantiteVente')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="dateVente" value="{{ old('dateVente') }}" required autocomplete="dateVente">
            
                                            @error('dateVente')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="montantAchat" class="col-md-4 col-form-label text-md-right">{{ __('Montant de l\'achat') }}</label>
                                        
                                        <div class="col-md-6">
                                            <input id="montantAchat" type="number" class="form-control @error('Montant achat') is-invalid @enderror" name="montantAchat" required autocomplete="montantAchat">
                                            
                                            @error('montantAchat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><span>F CFA</span>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="montantRecu" class="col-md-4 col-form-label text-md-right">{{ __('Montant reçu') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="montantRecu" type="number" class="form-control" name="montantRecu" required autocomplete="montantRecu" onblur="calculmonnaie()">
                                            @error('montantRecu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><span>F CFA</span>
                                    </div>

                                    <div class="form-group row">
                                        <label for="monnaie" class="col-md-4 col-form-label text-md-right">{{ __('Monnaie') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="monnaie" type="number" class="form-control" name="monnaie" required autocomplete="monnaie">
                                            @error('monnaie')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><span>F CFA</span>
                                    </div>          

            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button id="subm" type="submit" class="btn btn-primary">
                                                {{ __('Vendre') }}
                                            </button>
                                            <button type="reset" class="btn btn-danger">
                                                {{ __('Annuler') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
