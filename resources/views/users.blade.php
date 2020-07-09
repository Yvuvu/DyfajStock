@extends('template')

@section('title', 'Utilisateurs')  

@section('menu')
{{-- @if(auth()->user()->role_id==1) --}}
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
              <span class="section-heading-lower">Creer un utilisateur</span>
            </h2>
            <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            {{-- <div class="card-header">{{ __('Register') }}</div> --}}
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
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
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
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
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmez le mot de passe') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="role" class="form-control" name="role_id" pattern="[^\s]" required autocomplete="role_id">
                                                <option selected></option>
                                                @foreach ($role as $role)
                                                
                                                <option value="{{$role->id}}">{{$role->role}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Enregistrer') }}
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

  <section class="page-section about-heading">
    <div class="container">
        <div class="table-responsive table">
            <table id="list" class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Crée le</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($user as $user)
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <tr @if($user->role_id==1) style="background-color: #263c5c7c" @endif>
                            <td><strong>{{ $user->name }}</strong></td>
                            <td class="text-dark"><strong>{{ $user->email }}</strong></td>
                            
                            <td>{{ $user->role->role }}</td>
                            
                            <td><strong>{{ $user->created_at }}</strong></td>
                            <td>                                
                                <a type="button" href="{{ route('users.show', $user->id) }}"
                                    class="btn btn-info btn-sm pull-right mr-2" data-toggle="tooltip"
                                    title="@lang("Voir l'utilisateur") {{ $user->name }}">Voir</a>
                                <a type="button" href="{{ route('users.edit', $user->id) }}" 
                                class="btn btn-warning btn-sm pull-right mr-2" data-toggle="tooltip" 
                                title="@lang("Modifier l'utilisateur") {{ $user->name }}">Editer</a>
                                @csrf

                                @method('DELETE')
                                <button type="submit"  
                                    class="btn btn-danger btn-sm pull-right" data-toggle="tooltip"
                                    title="@lang("Supprimer l'utilisateur") {{ $user->name }}">Supprimer</button>
                                
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </section>
@endsection
