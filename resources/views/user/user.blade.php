@extends('layouts.app')
@section('title',$user->name)
@section('content')
    <h2>
        Bienvenue {{$user->name}}
    </h2>

    <div id="user">
        <img class="avatar" src='{{asset($user->avatar)}}'/>
        <p>{{$user->email}}</p>
        <p>Vous avez regardé {{$temps}} heures de séries </p>
        <p>Séries Vues</p>
        <div class="caroussel">
            @foreach($serieVue as $serie)
                <div><a href={{route('details.serie',[$serie -> id])}}>
                        <img src="{{asset($serie->urlImage)}}">
                    </a></div>
            @endforeach
        </div>
        <div class="commentaire">
            @if($user->administrateur == 1)
                <div class="nom">
                    <p>commentaire administrateur</p>
                </div>
                @foreach($commentsAdmin as $comment)
                    <div class="contenu">

                        <p> {!! $comment->content !!}</p>
                    </div>
                @endforeach
            @endif
        </div>

@endsection