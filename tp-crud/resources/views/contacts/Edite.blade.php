@extends('contacts.layout')
@section('content')
    <div class="card">
        <div class="card-header">MODIFIER</div>
        <div class="card-body">
            <form action="{{ url('contacts' .$contacts->id) }}" method="post">
                @csrf
                @method("PATCH")

                <label for="nom">Nom:</label><br>
                <input type="text" name="nom" id="nom" class="form-control"><br>
                
                <label for="nom">Email:</label><br>
                <input type="email" name="email" id="email" class="form-control"><br>

                <label for="nom">Photo:</label><br>
                <input type="file" name="photo" id="photo" class="form-control"><br>

                <input type="submit" value="modifier" class="btn btn-warnning">
            </form>
        </div>
    </div>
@endsection