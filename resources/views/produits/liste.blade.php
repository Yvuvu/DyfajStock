@extends('template')
 
 @section('contenu')
 <div class="container">
 <h1 class="armelle">LISTE DES PRODUITS</h1>
    <div class="row col-md-12 col-md-offset-2 custyle  text-white">
    <table class="table table-striped custab table-bordered">
    <thead>
    <a href="{{ url('nouveau-produit') }}" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b> Ajouter un produit</a>

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Categorie</th>
            <th>Unite</th>
            <th>Quantite</th>
            <th>Prix Unitaire</th>
            <th class="text-center">Option</th>
        </tr>
    </thead >
           @foreach($produits as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->nom}}</td>
                <td>{{$prod->categorie_id}}</td>
                <td>{{$prod->unite}}</td>
                <td>{{$prod->quantite}}</td>       
                <td>{{$prod->prixUnitaire}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href=><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="{{ url('destroy') }}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection