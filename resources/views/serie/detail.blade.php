@extends('layouts.app')
@section('content')
@if(!empty($fillable))
    <div id="serie">
        <div class="description">
            <h2>
                {{$fillable->nom}}
            </h2>
            <p>
                Categorie : {{$fillable->genre}}
            </p>
            <p>
                Date : {{$fillable->premiere}}
            </p>
            <p>
                Description : {!!$fillable->resume!!}

            </p>
        </div>
        <img src="{{asset($fillable->urlImage)}}">
        <div class="avis">

            <h2 class="titreavis">
                Note et avis sur la série
            </h2>
            <div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet condimentum libero sed
                    finibus. Vestibulum ut quam ac turpis luctus pulvinar. Aenean tincidunt leo quis pharetra pretium.
                    Aliquam blandit quis nisi sit amet vulputate. Suspendisse imperdiet dolor mauris, sit amet suscipit
                    sem lobortis sed. Curabitur sit amet mauris tempus, tincidunt mi eget, pellentesque metus. In eget
                    diam eu . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet condimentum libero
                    sed finibus. Vestibulum ut quam ac turpis luctus pulvinar. Aenean tincidunt leo quis pharetra
                    pretium. Aliquam blandit quis nisi sit amet vulputate. Suspendisse imperdiet dolor mauris, sit amet
                    suscipit sem lobortis sed. Curabitur sit amet mauris tempus, tincidunt mi eget, pellentesque metus.
                    In eget diam eu .
                </p>
                Note :
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i
                        class="fas fa-star"></i>
                        {{$fillable->note}}
            </div>
        </div>
        <div class="sec_episode">
            <h2>Episodes:</h2>
        @foreach($epParSaison as $Saison)
            <h4>Saison {{$Saison[0]->saison}}</h4>
            <div id="caroussel">
            @foreach($Saison as $ep)
                <img src="{{asset($ep->urlImage)}}">
            @endforeach
            </div>
        @endforeach
        </div>
        
        <div id="commentaire">
        <span>
            <i class="fas fa-user"></i>
            Pseudo personne
        </span>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisl in ex porttitor convallis ut a
                elit.
                Aliquam in dui vitae justo sagittis gravida ut ac sem. Pellentesque maximus sodales erat vel cursus.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
        </div>
    </div>

    @else
    <h3>Aucune Serie</h3>
@endif

@endsection