@extends('layouts.app')

@section('contenu')
    <h1>Liste des articles :</h1>
    {{-- <form action="{{ route('articles.search') }}" method="GET">
        <input type="text" name="search" placeholder="Rechercher un article">
        <br>
        <button type="submit">Rechercher</button>
    </form> --}}
    <form action="{{ route('articles.search') }}" method="GET">
        <input type="text" name="title" placeholder="Enter article title">
        <button type="submit">Search</button>
    </form>
        

    <ul>
        @foreach ($articles as $article)
            <li><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>

    {{ $articles->links() }}
@endsection
