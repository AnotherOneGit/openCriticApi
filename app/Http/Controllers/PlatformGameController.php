<?php

namespace App\Http\Controllers;

use App\Platform_Game;
use Illuminate\Http\Request;

class PlatformGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Platform_Game  $platform_Game
     * @return \Illuminate\Http\Response
     */
    public function show($platform_Game)
    {
        return view('game', ['platform_Game'=> Platform_Game::where('id', $platform_Game)->firstOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Platform_Game  $platform_Game
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform_Game $platform_Game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Platform_Game  $platform_Game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform_Game $platform_Game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Platform_Game  $platform_Game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform_Game $platform_Game)
    {
        //
    }
}
