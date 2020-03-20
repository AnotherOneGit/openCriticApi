<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $games=Game::all()->sortByDesc('percentile')->whereNotIn('Rating', 'T')->where('percentile', '<',30);
        return view('games.index', ['games'=>$games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {
        return ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($game)
    {
        return view('games.game', ['game'=> Game::where('id', $game)->firstOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return void
     */
    public function edit(Game $game)
    {
        return ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return void
     */
    public function update(Request $request, Game $game)
    {
        return ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return void
     */
    public function destroy(Game $game)
    {
        return ;
    }
}
