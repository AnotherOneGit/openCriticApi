<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;

class GenresController extends Controller
{

    public function index()
    {
        $genres=Genre::all();
        return view('genres.index', ['genres'=>$genres]);
    }

    public function show(Genre $genre)
    {
        return view('genres.genre', ['genre'=> $genre]);
    }

    public function create()
    {
        return view('genres.create', [
            'genres'=>Genre::all()
        ]);
    }

    public function store()
    {
        Genre::create($this->validateGenre());

        return redirect('/genre');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Genre $genre)
    {

        $genre->update($this->validateGenre());

        return redirect('/genre/'. $genre->id);
    }

    /**
     * @return array
     */
    protected function validateGenre(): array
    {
        return \request()->validate([
            'id' => 'bail|required|max:11',
            'name' => 'bail|required|unique:genres|max:255',
        ]);
    }

}
