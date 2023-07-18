@extends('layout')
@section('title', 'Computers')
@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1>COMPUTERS </h1>
        </div>
        <form action="{{ route('computers.search') }}" method="get">
            @csrf
            <input type="text" name="search" placeholder="Search for computers">
            <button type="submit">Search</button>
        </form>

        <div>
            <ul>
                @foreach ($computers as $item)
                    <a href="{{ route('computers.show', ['computer' => $item['id']]) }}" id="index-computer">
                        <li> 
                            {{ $item['name'] }} is from <b> {{ $item['origin'] }}</b> 
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
        <a href="{{ route('computers.create') }}">
            <button class="add" type="submit">Add New Computer</button>
        </a>
    </div>
@endsection


