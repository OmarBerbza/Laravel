@extends('layout')
@section('title', 'Edit Computers')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1>EDIT COMPUTERS </h1>
        </div>

        <div class="flex justify-center">
            <form action="{{ route('computers.update', ['computer'=>$computers->id]) }}" method="POST" class="form bg-white p-6 border-1">
                @csrf
                @method('PUT')

                <div>
                    <label for="computer-name" class="text-sm">Computer Name</label>
                    <input type="text" name="computer-name" value="{{ $computers->name }}" class="text-lg border-1" id="computer-name">
                    @error('computer-name')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-origin" class="text-sm">Computer Origin</label>
                    <input type="text" name="computer-origin" value="{{ $computers->origin }}" class="text-lg border-1" id="computer-origin">
                    @error('computer-origin')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-price" class="text-sm">Computer Price</label>
                    <input type="text" name="computer-price" value="{{ $computers->price }}" class="text-lg border-1" id="computer-price">
                    @error('computer-price')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button class="edit" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection


