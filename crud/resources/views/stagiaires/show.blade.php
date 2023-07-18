@extends('layouts.app')

@section('content')

    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($stagiaire->photo) }}" class="card-img-top" alt="Photo de stagiaire">
        <div class="card-body">
            <p class="card-text"><b>Le Nom:</b> {{ $stagiaire->nom }}</p>
            <p class="card-text"><b>Le Prenom:</b> {{ $stagiaire->prenom }}</p>
            <p class="card-text"><b>Email:</b> {{ $stagiaire->email }}</p>
            <p class="card-text"><b>Date De Naissance:</b> {{ $stagiaire->dateNaissance }}</p>
        </div>
  </div>

@endsection