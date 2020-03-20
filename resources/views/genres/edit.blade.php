@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Edit Genre</h1>
            <form action="/genre/{{ $genre->id }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="id">ID</label>
                    <div>
                        <input type="number" name="id" id="id" value="{{ $genre->id }}">
                        <p>{{ $errors->first('id') }}</p>
                    </div>
                </div>
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" id="name" value="{{ $genre->name }}">
                        <p>{{ $errors->first('name') }}</p>
                    </div>
                </div>
                <br>
                <input type="submit" value="Edit Genre" class="button button-primary">
            </form>
        </div>
    </div>
@endsection
