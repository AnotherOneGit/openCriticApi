<?php

namespace App\Http\Controllers;

use App\Game;
use App\Genre;
use App\Platform;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        if (\request('genre')) {
            $games = Genre::where('name', \request('genre'))->firstOrFail()->game
                ->sortByDesc('averageScore')
            ;
        } elseif (\request('platform'))
        {
            $games = Platform::where('name', \request('platform'))->firstOrFail()->game
                ->sortByDesc('averageScore')
            ;
        } elseif (\request('sort'))
        {
            $games = Game::all()->sortByDesc(\request('sort'));
        }
        elseif (\request('exclusive'))
        {
            $platformArray = ['Microsoft', 'Sony', 'Nintendo'];
            $platformArrayFiltered = array_values(array_diff($platformArray, [request('exclusive')]));
            $games=Game::all()->where($platformArrayFiltered[0], 0)
                              ->where($platformArrayFiltered[1], 0)
                ->sortByDesc('averageScore')
            ;
        }
         else {
            $games=Game::all()
                ->sortByDesc('averageScore')
            ;
        }

        return \view('games.index', ['games'=>$games]);
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
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        return ;
    }

    /**
     * Display the specified resource.
     *
     * @param Game $game
     * @return Factory|View
     */
    public function show($game)
    {
        return view('games.game', ['game'=> Game::where('id', $game)->firstOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Game $game
     * @return void
     */
    public function edit(Game $game)
    {
        return ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Game $game
     * @return void
     */
    public function update(Request $request, Game $game)
    {
        return ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Game $game
     * @return void
     */
    public function destroy(Game $game)
    {
        return ;
    }
}
