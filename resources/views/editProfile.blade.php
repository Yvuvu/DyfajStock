@extends('template')

@section('title', 'Modifier un utilisateur')  

@section('menu')
{{-- @if(auth()->user()->role_id==1) --}}
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
              <span class="section-heading-lower">Modifier mes paramètres</span>
            </h2>
            <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('profileUpdate',$user->id)  }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
            
                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse E-Mail') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $user->password }}" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>            
           
                                    {{-- <div class="form-group row">
                                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="role" class="form-control" name="role_id" pattern="[^\s]" value="{{ $user->role->role }}" required autocomplete="role_id">
                                                <option selected></option>
                                                <option value="1">Administrateur</option>
                                                <option value="2">Utilisateur</option>
                                            </select>
                                        </div>
                                    </div> --}}
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Modifier') }}
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
