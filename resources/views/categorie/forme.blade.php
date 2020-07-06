@extends('template')
 
 @section('contenu')
 <br>
 <h4 class="text-center text-white">ENREGISTRER CATEGORIE</h4>
<div class="page-sectio">

     <form action="{{url('ajouter_categorie')}}" method="post">
     @csrf
     <div class="form-group">
     <label class="col-md-4 control-label text-white" for="prixUniaire">Categorie</label>  
     <div class="col-md-8">
     <input id="prixUniaire" name="categorie" type="text" placeholder="" class="form-control input-md">
     </div>
   </div>
   <div class="form-group">
     <label class="col-md-4 control-label" for="button1id"></label>
     <div class="col-md-8">
       <button id="button1id" name="button1id" class="btn btn-success">Ajouter</button>
       <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
     </div>
   </div>
              
              </html>
              @endsection