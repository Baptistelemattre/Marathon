

<html>
<head>
    <title>Liste des Serie</title>
</head>
<body>
<h2>La liste des Serie</h2>
<form method="post" action="search.php">
    <input type="text" name="search" placeholder="Search a serie">
    <input type="submit" value="Submit">
</form>

@if(!empty($listeRandom))
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
        @foreach($listeRandom as $f)
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
@else
    <h3>aucune Serie</h3>
@endif

</body>
</html>
