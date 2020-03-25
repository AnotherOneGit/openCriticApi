<?php

namespace App\Http\Controllers;

use App\Game;
use App\Genre;
use App\Platform;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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
            $games = Genre::where('name', \request('genre'))->firstOrFail()->game;
        } elseif (\request('platform'))
        {
            $games = Platform::where('name', \request('platform'))->firstOrFail()->game;
        } else
//            if (\request('sort'))
        {
            $games = DB::select('
SELECT games.name, games.id, game_platform.platform_id
  FROM games
  JOIN game_platform
  ON games.id = game_platform.game_id
  WHERE games.id IN
(
SELECT game_id
FROM game_platform
GROUP BY game_id
HAVING COUNT(*)=1
 )
  ');
//                ->join('game_platform', 'games.id', '=', 'game_platform.game_id')
//                ->join('platforms', 'platforms.id', '=', 'game_platform.platform_id')
//                ->where('games.name')
//                ->where('isMajorTitle', '=', \request('tier'))
//                ->where('tier', '=', 'Strong')
//                ->sortByDesc(\request('sort'));
        }
//        } else {
//            $games=Game::all();
//        }

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
