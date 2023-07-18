@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end pb-2">
            <a href="{{ route('stagiaires.create') }}" class="btn btn-info">Ajouter</a>
        </div>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Email</td>
                    <td>Date de naissance</td>
                    <td>Photo</td>
                    <td>Action</td>
                </tr>
                @foreach ($stagiaires as $stagiaire)
                    <tr>
                        <td>{{ $stagiaire->id }}</td>
                        <td>{{ $stagiaire->nom }}</td>
                        <td>{{ $stagiaire->prenom }}</td>
                        <td>{{ $stagiaire->email }}</td>
                        <td>{{ $stagiaire->dateNaissance->format('d/m/Y') }}</td>
                        <td><img src="{{ Storage::url($stagiaire->photo) }}" alt="image de stagiaire" width="100"></td>
                        <td>
                            <a href="{{ route('stagiaires.show', $stagiaire->id) }}" class="btn btn-success">Afficher</a>
                            <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('stagiaires.destroy', $stagiaire->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach     
            </tbody>
        </table>
    </div>
@endsection