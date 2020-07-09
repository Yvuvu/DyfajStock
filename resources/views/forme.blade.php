@extends('template')
@section('title','Nouveau-produit')
@section('menu')
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="{{ route('produits') }}">Produits
  <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item active px-lg-4">
<a class="nav-link text-uppercase active text-expanded" href="{{ URL('nouveau-produit') }}">Nouveau produit</a>
</li>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="{{ URL('entree') }}">Nouvelle entrée</a>
</li>
<li class="nav-item  px-lg-4">
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


</head> 

    
<!-- Form Name -->
<br>
 <h4 class="text-center text-white">ENREGISTRER UN NOUVEAU PRODUIT</h4>

 <form class="form-horizontal "action=" {{url('ajouter_produit')}}" method="post">

<div class="page-sectio">
@csrf
<div class="form-group d-flex">
               <div>
                    <label  class="col-md-4 control-label text-white">Categorie</label>
                    <div class="col-md-12">
                    <select name="categorie_id" class="form-control input-md">
                        @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label text-white">Unite</label>
                    <div class="col-md-12">
                    <select name="categorie_id" class="form-control input-md">
                        @foreach($unite as $unite)
                            <option value="{{$unite->id}}">{{$unite->unite}}</option>
                        @endforeach
                    </select>
                    </div >
                </div>
                 </div>
<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label text-white"  for="">Nom</label>  
  <div class="col-md-8">
  <input id="" name="nom" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="prixUnitaire">Prix unitaire</label>  
  <div class="col-md-8">
  <input id="prixUniaire" name="prixUnitaire" type="number"  placeholder="" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="quantiteProduit ">Quantite</label>  
  <div class="col-md-8">
  <input id="quantiteProduit" name="quantiteProduit" type="number"  class="form-control input-md">
    
  </div>
</div>

<
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-primary">Ajouter</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>
</div>

</form>
              @endsection