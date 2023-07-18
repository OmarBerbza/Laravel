@extends('layout')
@section('title', 'Add New Computers')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1>ADD NEW COMPUTERS </h1>
        </div>

        <div class="flex justify-center">
            <form action="{{ route('computers.store') }}" method="POST" class="form bg-white p-6 border-1">
                @csrf
                <div>
                    <label for="computer-name" class="text-sm">Computer Name</label>
                    <input type="text" name="computer-name" value="{{ old('computer-name') }}" class="text-lg border-1" id="computer-name">
                    @error('computer-name')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-origin" class="text-sm">Computer Origin</label>
                    <input type="text" name="computer-origin" value="{{ old('computer-origin') }}" class="text-lg border-1" id="computer-origin">
                    @error('computer-origin')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-price" class="text-sm">Computer Price</label>
                    <input type="text" name="computer-price" value="{{ old('computer-price') }}" class="text-lg border-1" id="computer-price">
                    @error('computer-price')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button class="add" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection


