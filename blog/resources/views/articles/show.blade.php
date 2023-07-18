@extends('layouts.app')

@section('contenu')
    <h1> {{$article->title}} </h1>
    <p> {{$article->content}} </p>
    <h2>Commentaires:</h2>

    <ul>
        @foreach ($article->commentaires as $commentaire)
            <li>{{ $commentaire->contenu }}</li>
        @endforeach

    </ul>

    <h3>Ajouter un commentaire:</h3>
    <form action="{{ route('commentaires.store', ['articleId' => $article->id]) }}" method="POST">
        @csrf
        <textarea name="contenu" cols="30" rows="10" required></textarea>
        <br>
        <button type="submit">Ajouter</button>
    </form>    
    
@endsection