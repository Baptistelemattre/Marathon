@extends('layouts.app')
@section('content')
    <div id="serie">
        <div class="description">
            <h2>
                nom serie(a rendre dynamique)
            </h2>
            <p>
                categorie : categorie des films
            </p>
            <p>
                Nombre d'épisodes
            </p>
            <p>
                date :
            </p>
            <p>
                description : <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet condimentum
                libero sed
                finibus. Vestibulum ut quam ac turpis luctus pulvinar. Aenean tincidunt leo quis pharetra pretium.
                Aliquam
                blandit quis nisi sit amet vulputate. Suspendisse imperdiet dolor mauris, sit amet suscipit
                sem lobortis sed. Curabitur sit amet mauris tempus, tincidunt mi eget, pellentesque metus.
                In eget diam eu .

            </p>
        </div>
        <img src="{{asset('img/medium_portrait_373_933043.jpg')}}">
        <div class="avis">

            <h2>
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
                note :
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i
                        class="fas fa-star"></i>
            </div>
        </div>
        <p>
            Episodes:
        </p>
        <div class="caroussel">
            <i class="fas fa-chevron-left"></i>
            <a href="">
                <img src="{{asset('img/medium_landscape_1_2585.jpg')}}">
                Episode x/y
            </a>
            <a href="">
                <img src="{{asset('img/medium_landscape_1_2585.jpg')}}">
                Episode x/y
            </a>
            <a href="">
                <img src="{{asset('img/medium_landscape_1_2585.jpg')}}">
                Episode x/y
            </a>
            <i class="fas fa-chevron-right"></i>
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
@endsection