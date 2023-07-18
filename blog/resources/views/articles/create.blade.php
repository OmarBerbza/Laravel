@extends('layouts.app')

@section('contenu')
    <h1>Créer un nouvelle article:</h1>
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="contenu">Contenu:</label>
        <textarea name="contenu" id="contenu" cols="30" rows="10" required></textarea>        
        <br>
        <button type="submit">Créer</button>
    </form>
@endsection