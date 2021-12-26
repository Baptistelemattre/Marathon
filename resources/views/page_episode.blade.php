@extends('layouts.app')
@section('content')
    <div>
        <h2>
            nom episode(a rendre dynamique)
        </h2>
        <p>
            Numéro épisode : x
        </p>
        <p>
            saison
        </p>
        <p>
            durée:
        </p>
        <p>
            première diffusion
        </p>
        <p>
            résumé : <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet condimentum libero sed
            finibus. Vestibulum ut quam ac turpis luctus pulvinar. Aenean tincidunt leo quis pharetra pretium. Aliquam
            blandit quis nisi sit amet vulputate. Suspendisse imperdiet dolor mauris, sit amet suscipit
            sem lobortis sed. Curabitur sit amet mauris tempus, tincidunt mi eget, pellentesque metus.
            In eget diam eu .

        </p>
    </div>
    <div>
        <p>
            Episodes:
        </p>
        <i class="fas fa-chevron-left"></i>
        <span>
            <a href="">
            <img src="https://www.topoftravel-pro.fr/output/information/prestation/25579/BTOB-Hotel-Chorges-2-250x140px.jpg">
                Episode x/y</a>
            <a href="">
            <img src="https://www.topoftravel-pro.fr/output/information/prestation/25579/BTOB-Hotel-Chorges-2-250x140px.jpg">
                Episode x/y</a>
            <a href="/pageEpisode">
            <img src="https://www.topoftravel-pro.fr/output/information/prestation/25579/BTOB-Hotel-Chorges-2-250x140px.jpg">
                Episode x/y</a>
        </span>
        <i class="fas fa-chevron-right"></i>

    </div>
    <div id="commentaire">
        <span>
            <i class="fas fa-user"></i>
            Pseudo personne
        </span>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac nisl in ex porttitor convallis ut a elit.
            Aliquam in dui vitae justo sagittis gravida ut ac sem. Pellentesque maximus sodales erat vel cursus. Class
            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
        </p>
    </div>
@endsection