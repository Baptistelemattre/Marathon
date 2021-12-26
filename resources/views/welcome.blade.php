@extends('layouts.app')

@section('content')
    <div class="moment">
        <h2>
            Les séries du moment
        </h2>

        <div class="caroussel">
            @if(!empty($listeAffiche))
                @foreach($listeAffiche as $serie)
                    <a href="{{route('details.serie',['id' => $serie->id])}}">  <img src="{{asset($serie->urlImage)}}">  </a>
                @endforeach
            @else
                <p>Affiche Indisponible</p>
            @endif
        </div>
    </div>
    <div class="categaleatoire">
        <h2>
            Categorie Aléatoire
        </h2>
        <div class="caroussel">
            <i class="fas fa-chevron-left"></i>
            @if(!empty($listeRandom))
                @foreach($listeRandom as $serie)
                    <a href="{{route('details.serie',['id' => $serie->id])}}">  <img src="{{asset($serie->urlImage)}}">  </a>
                @endforeach
            @else
                <p>Affiche Indisponible</p>
            @endif
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
@endsection