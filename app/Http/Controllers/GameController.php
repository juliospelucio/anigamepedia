<?php

namespace App\Http\Controllers;

use App\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::orderBy('name')->get();
        return view('games.index', [
            'games' => $games
        ]);
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        // echo "<pre>";
        // print_r($game);
        // echo "</pre>";
        // exit;
        return view('games.show', ['game' => $game]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function store()
    {
        $game = new Game();
        $game->name = request('name');
        $game->gender = request('gender');
        $game->publisher = request('publisher');
        $game->platforms = request('platforms');
        $game->score = request('score');
        $game->save();

        return redirect('/')->with('mssg', 'Game saved with success');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', ['game' => $game]);
    }

    public function update($id)
    {
        $game = Game::find($id);

        $game->name = request('name');
        $game->gender = request('gender');
        $game->publisher = request('publisher');
        $game->platforms = request('platforms');
        $game->score = request('score');

        $game->save();
        return redirect('/')->with('mssg', 'Game updated with success');
    }
}
