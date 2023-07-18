<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les listes des habitants</title>
    <style>

    </style>
</head>
<body>
    <a href="/habitants/create"><button type="submit">Ajouter</button></a>
    @foreach ($list as $item)
        <ul>
            <li><b>ID:</b> {{ $item->id }}</li>
            <li><b>CIN:</b> {{ $item->cin }}</li>
            <li><b>Nom complet:</b> {{ $item->nom }} {{ $item->prenom }}</li>
            <li><b>Ville:</b> {{ $item->ville->nom_de_ville }}</li>
            <li>
                <b>Photo:</b> <br>
                @if ($item->photo)
                    <img src="{{ url("storage/" . $item->photo) }}" width="100" height="100" alt="Photo de {{ $item->nom }} {{ $item->prenom }}">
                @endif
            </li>
        </ul>
        <a href="/habitants/edit/{{ $item->id }}"><button>Modifier</button></a>
        <form action="{{ route('habitants.destroy', $item->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Supprimer</button>
        </form>
        
        <hr>
    @endforeach
</body>
</html>