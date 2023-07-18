<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier un habitant</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        form{
            width: 100%;
            max-width: 300px;
            display: flex;
            flex-direction: column;
        }
        form input, form select{
            width: 100%;
            margin-bottom: 20px;
            height: 40px;
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <form action="/habitants" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <input type="hidden" name="id" value="{{ $habitant->id }}">
        <input type="text" name="cin" placeholder="CIN" value="{{ $habitant->cin }}">
        <input type="text" name="nom" placeholder="Nom" value="{{ $habitant->nom }}">
        <input type="text" name="prenom" placeholder="Prenom" value="{{ $habitant->prenom }}">
        <select name="ville_id">
            <option value="" selected disabled>Séléctionner une ville</option>
            @foreach ($villes as $ville)
                <option value="{{ $ville->id }}">{{ $ville->nom_de_ville }}</option>
            @endforeach
        </select>
        <input type="file" name="photo">
        <img src="{{ url("storage/" . $habitant->photo) }}" width="100" height="100" alt="Photo de {{ $habitant->nom }} {{ $habitant->prenom }}">
        <br>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>