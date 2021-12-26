@extends('layouts.app')
@section('content')
    <div id="categories">
        <h2>
            Tout
        </h2>
        <section>
            <h3>categorie 1</h3>
            <select>
                <option value="filtre" selected>filtre</option>
            </select>
        </section>
        <div class="caroussel">
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
        </div>
        <hr>
        <section>
            <h3>categorie 1</h3>
        </section>
        <div class="caroussel">

            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
            <a href="/pageSerie">
                <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
            </a>
        </div>
    </div>

@endsection