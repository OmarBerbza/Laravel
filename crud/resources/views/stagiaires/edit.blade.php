@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ route('stagiaires.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Le Nom:</label>
                <input type="text" name="nom" value="{{ $stagiaire->nom }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="prenom">Le Prenom:</label>
                <input type="text" name="prenom" value="{{ $stagiaire->prenom }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $stagiaire->email }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="date">Date De Naissance:</label>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enregistrer">
            </div>
        </form>
    </div>

@endsection