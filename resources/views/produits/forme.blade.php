@extends('template')
 @section('contenu')


</head> 

    
<!-- Form Name -->
<br>
 <h4 class="text-center text-white">ENREGISTRER UN NOUVEAU PRODUIT</h4>

 <form class="form-horizontal "action=" {{url('ajouter_produit')}}" method="post">

<div class="page-sectio">

<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label text-white"  for="">Nom</label>  
  <div class="col-md-8">
  <input id="" name="nom" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="quantiteProduit ">Quantite</label>  
  <div class="col-md-8">
  <input id="quantiteProduit" name="quantiteProduit" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="prixUniaire">Prix unitaire</label>  
  <div class="col-md-8">
  <input id="prixUniaire" name="prixUniaire" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Ajouter</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>
</div>

</form>
              @endsection