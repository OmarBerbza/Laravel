@extends('contacts.layout')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ $contacts->photo }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Le nom et le prenom</b> {{ $contacts->nom }} {{ $contacts->prenom }} </h5>
            <p class="card-text"><b>Email: </b> {{ $contacts->email }} </p>
        </div>
  </div>
@endsection