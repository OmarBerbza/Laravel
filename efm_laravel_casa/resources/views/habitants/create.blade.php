<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créé un habitant</title>
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
        <input type="text" name="cin" placeholder="CIN">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prenom">
        <select name="ville_id">
            <option value="" selected disabled>Séléctionner une ville</option>
            @foreach ($villes as $ville)
                <option value="{{ $ville->id }}">{{ $ville->nom_de_ville }}</option>
            @endforeach
        </select>
        <input type="file" name="photo">
        <button type="submit">Créé</button>
    </form>
</body>
</html>