<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::get();
        return view('auth.admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.admin.games.add-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('games');
        $params = $request->all();
        $params['image'] = $path;
        Game::create($params);
        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('auth.admin.games.show',compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('auth.admin.games.add-form', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        if(!is_null($request->image)){
            Storage::delete($game->image);
            $path = $request->file('image')->store('games');
            $params = $request->all();
            $params['image'] = $path; 
            $game->update($params);
        }else {
            $params = $request->all();
            $game->update($params);
        }

        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
