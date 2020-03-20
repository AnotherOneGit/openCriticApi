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
        return view('genres.create');
    }

    public function store()
    {
        \request()->validate([
            'id'=>'bail|required|unique:genres|max:11',
            'name'=>'bail|required|unique:genres|max:255',
        ]);


        $genre = new Genre();
        $genre->id=\request('id');
        $genre->name=\request('name');
        $genre->save();
        return redirect('/genre');
    }

    public function edit($id)
    {
        return view('genres.edit', ['genre'=> Genre::where('id', $id)->firstOrFail()]);
    }

    public function update($id)
    {
        $genre=Genre::find($id);

        $genre->id=\request('id');
        $genre->name=\request('name');
        $genre->save();
        return redirect('/genre/'. $genre->id);
    }

}
