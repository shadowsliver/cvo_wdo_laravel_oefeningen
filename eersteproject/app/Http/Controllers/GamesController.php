<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

use App\Http\Requests;

class GamesController extends Controller
{
    public function index(){
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create() {
        $game = new Game();
        return view('games.create', compact('game'));
    }

    public function store(Requests\SaveGameRequest $request)
    {
        $game = new Game;
        $game->title = $request->input('title');
        $game->publisher = $request->input('publisher');
        $game->complete = $request->has('complete');
        $game->save();

        return redirect(route('game.create'));
    }
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    public function update(Requests\SaveGameRequest $request, $id)
    {
        $game = Game::findOrFail($id);
        $game->update($request->only('title', 'publisher', 'complete'));
        return redirect(route('game.index'));
    }
    public function destroy($id)
    {
        $game = Game::findOrFail($id)->delete();
        return redirect(route('game.index'));
    }
    public function destroyConfirm($id)
    {
        $game = Game::findOrFail($id);
        return view('games.confirm', compact('game'));
    }


}
