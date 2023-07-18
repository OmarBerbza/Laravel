@extends('layout')
@section('title', 'Show Computers')
@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1>COMPUTER {{ $computers['name'] }} </h1>
        </div>

        <div class="mt-16">
            <h3>{{ $computers['name'] }} is from <b> {{ $computers['origin'] }}</b> - {{ $computers['price'] }}$</h3>
            <a class="edit" href="{{ route('computers.edit', ['computer' => $computers['id']]) }}"><button>Edit</button></a>

            <form id="delete" action="{{ route('computers.destroy', $computers->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button class="delete" type="submit" onclick="confirmDelete(event)">Delete</button>
            </form>
        </div>
    </div>
@endsection



