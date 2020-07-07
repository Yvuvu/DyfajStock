@extends('template')
@section('title', 'portail')
@section('menu')
    <li class="nav-item active px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('/')}}">ACCUEIL
            <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{url('admin')}}">ADMINISTRATEUR</a>
    </li>
    <li class="nav-item px-lg-4">
        <a class="nav-link text-uppercase text-expanded" href="{{route('login')}}">AUTRE&nbsp;&nbsp;UTILISATEUR</a>
    </li>
@endsection
@section('contenu')
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('assets/img/intro.jpg')}}" width="1000" height="500px" alt="">  
                <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Un stock</span>
                        <span class="section-heading-lower">Une&nbsp;application&nbsp; Dyfaj&nbsp;Stock</span>
                    </h2>
                    <p class="mb-3">Dyfaj Stock est une application web, simple et intuitive pour une meilleure gestion de stock</p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="{{url('login')}}">Se connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection