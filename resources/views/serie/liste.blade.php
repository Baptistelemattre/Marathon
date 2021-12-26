@extends('layouts.app')
@section('title','Liste')
@section('content')
    <div id="categories">
        <h2>
            Toutes les catégories
        </h2>
                    
        <h4>Liste catégorie :</h4>
        @foreach($cateDiff as $cat)<a class="list_categorie" href="#{{$cat}}">{{$cat}}</a>@endforeach
        @if(!empty($fillable))
            @foreach($fillable as $cate)
                <section>
                    <h3 id="{{$cate[0]->genre}}"> {{$cate[0]->genre}}</h3>
                </section>

                <div class="caroussel">
                    <!--<i class="fas fa-chevron-left"></i>-->
                    @foreach($cate as $serie)
                        <a href="{{route('details.serie',['id' => $serie->id])}}"><img src="{{asset($serie->urlImage)}}"></a>
                @endforeach
                <!--<i class="fas fa-chevron-right"></i>-->

                </div>
            @endforeach
    </div>
    {{--
    <table>
        <tr>
            <th>ID</th>
            <th>nom</th>
            <th>langue</th>
            <th>note</th>
            <th>statut</th>
            <th>genre</th>
            <th>urlImage</th>
        </tr>
        @foreach($fillable as $f)
            <tr>
                <td><a href="/liste/{{$f->id}}">{{$f->id}}</a></td>
                <td>{{$f->nom}}</td>
                <td>{{$f->langue}}</td>
                <td>{{$f->note}}</td>
                <td>{{$f->statut}}</td>
                <td>{{$f->genre}}</td>
                <td><img src="{{asset($f->urlImage)}}"></td>
            </tr>
        @endforeach
    </table>
    --}}

    @else
        <h3>aucune Serie</h3>
    @endif
@endsection
