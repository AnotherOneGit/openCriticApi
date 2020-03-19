<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;

class GenresController extends Controller
{
    public function show($genre)
    {
        return view('genre', ['genre'=> Genre::where('id', $genre)->firstOrFail()]);
    }

    public function index($genre)
    {
        return view('genre', ['genre'=>Genre::where('id', $genre)->get()]);
    }
}
