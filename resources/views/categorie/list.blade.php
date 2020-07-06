@extends('home')
 @extends('layouts/include')
 @section('conten')

 <div class="container">
 <h1 class="armelle">LISTE DES catégories</h1>
 <div class="row col-md-12 col-md-offset-2 custyle">
 <table class="table table-striped custab table-bordered">
    <thead>
    <a href="{{url('lot_form')}}" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b>Ajouter une Catégorie</a>

        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($lots as $lot)
            <tr>
                <td>{{$lot->id}}</td>
                <td>{{$lot->libelle}}</td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection