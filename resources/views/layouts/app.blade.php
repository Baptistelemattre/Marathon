<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b30b0e6bce.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Authentication Links -->
<nav>
    <div class="séries">
        <span><a href="/"><img src="{{asset('img/boutons/Logo_BF.svg')}}" alt="Accueil"></a></span>
        <span><a href="{{route('serie.liste')}}">Séries</a></span>
    </div>
    <form>
        <input type="text" method="GET" id="recherche" name="recherche" placeholder="Rechercher...">
        <label for="recherche">
            <button type="submit">
                <img src="{{asset('img/boutons/bouton_rechercher.svg')}}" alt="rechercher">
            </button>
        </label>
    </form>
    <div class="searchbar">
        @guest

            <a class="co" href="{{ route('login') }}"> Connexion</a>
            <a class="insc" href="{{ route('register') }}"> Inscription</a>
        @else
        <!--Bonjour {{ Auth::user()->name }}</li>-->
            @if (Auth::user())
                <a href="{{route('user.user')}}" >
                    <img src="{{asset('img/face/avatar.png')}}"  width="25px" alt="avatar" >
                </a>
                <!--<a href="#">Des liens spécifiques pour utilisateurs connectés..</a>-->
            @endif
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        @endguest
    </div>

</nav>
<div id="main">
    @yield('content')
</div>
<footer>
    <ul>
        <li>
            Réalisé par Back to the Front
        </li>
        <li>
            <a href="#">
                nous contacter
            </a>
        </li>
        <li>
            <a href="#">
                Lettre d'information
            </a>
        </li>
    </ul>
</footer>
<!-- Scripts -->
</body>
</html>
