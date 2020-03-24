@extends('layout')

@section('content')
    <div>
        <div>
            <h1>New Genre</h1>
            <form action="/genre" method="POST">
                @csrf
                <div>
                    <label for="">ID</label>
                    <div>
                        <input type="number" name="id" id="id"
                               @error('id') style="border: 1px solid red" @enderror
                            value="{{ old('id') }}"
                        >
                        @error('id')
                            <p style="color: red">{{ $errors->first('id') }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="name">Name</label>
                    <div>
                        <input type="text" name="name" id="name"
                               @error('name') style="border: 1px solid red" @enderror
                            value="{{ old('name') }}"
                        >
                        @error('name')
                            <p style="color: red">{{ $errors->first('name') }}</p>
                        @enderror
                    </div>
                </div>



                <div>
                    <label for="genre">Genre</label>
                    <div>
                        <select name="genre[]" id="genre"
                               @error('name') style="border: 1px solid red" @enderror
                               value="{{ old('name') }}"
                        >
                            @foreach($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>
                        @error('genre')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>



                <br>
                <input type="submit" value="Create Genre!" class="button button-primary">
            </form>
        </div>
    </div>
@endsection
