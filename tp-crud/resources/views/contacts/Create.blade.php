@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">AJOUTER</div>
        <div class="card-body">
            <form action="{{ url('contacts') }}" method="post">
                @csrf
                <label for="nom">Nom:</label><br>
                <input type="text" name="nom" id="nom" class="form-control"><br>
                
                <label for="nom">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control"><br>

                <label for="nom">Photo:</label><br>
                <input type="file" name="photo" id="photo" class="form-control"><br>

                <input type="submit" value="enregistrer" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection