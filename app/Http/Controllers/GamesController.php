<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GamesController extends Controller
{
    public function games()
    {
        $games = Game::where('season_id', request('season_id'))->orderBY('date', 'asc')->get();

        return view('games', ['games' => $games]);
    }

    public function delete()
    {
        $deleted = false;
        $game = Game::where('id', request('game_id'))->get()->first();
        $season_id = $game->season_id;

        if($game->delete()) $deleted=true;

        $games = Game::where('season_id', $season_id)->orderBY('date', 'asc')->get();
        return view('games', compact('games', 'deleted'));

    }

    public function add() {

        return view('addGame');
    }
}
