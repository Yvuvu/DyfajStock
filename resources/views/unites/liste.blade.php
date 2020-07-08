@extends('template')

 @section('contenu')

 <div class="container">
 <h1 class="armelle">LISTE DES UNITES</h1>
 <div class="row col-md-12 col-md-offset-2 custyle">
 <table class="table table-striped custab table-bordered">
    <thead>
    <a href="{{url('forme_unite')}}" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b>Ajouter une unite</a>

        <tr>
            <th>ID</th>
            <th>Unite</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($unite as $unite)
            <tr>
                <td>{{$unite->id}}</td>
                <td>{{$unite->unite}}</td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection