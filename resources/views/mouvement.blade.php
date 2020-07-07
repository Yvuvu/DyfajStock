@extends('template')
@section('title', 'Mouvements')
@section('menu')
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="produits">PRODUITS           
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('nouveau-produit')}}">NOUVEAU&nbsp;&nbsp;PRODUIT</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('nouvelle-entree')}}">NOUVELLE&nbsp;&nbsp;ENTREE</a>
        <span class="sr-only">(current)</span>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('vente')}}">VENTE</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('mouvements')}}">MOUVEMENTS</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('utilisateurs')}}">UTILISATEURS</a>
    </li>
@endsection
@section('contenu')

@endsection
<script src="{{asset('assets/vendor/DataTables/DataTables-1.10.20jquery/jquery.min.js')}}"></script>