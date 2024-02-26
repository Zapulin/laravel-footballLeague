<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;


class GamesFormController extends Controller
{
    public function show()
    {
        $game = Game::where('id', request('game_id'))->get()->first();
        return view('editGame', ['game' => $game]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'local_team' => 'required',
            'visitor_team' => 'required',
            'local_goals' => 'required',
            'visitor_goals' => 'required',
            'date' => 'required'
        ]);
        
        $updated = false;
        $game = Game::find(request('game_id'));
        
        $game->local_team = $request->local_team;
        $game->visitor_team = $request->visitor_team;
        $game->local_goals = $request->local_goals;
        $game->visitor_goals = $request->visitor_goals;
        $game->date = $request->date;

        if($game->save()) $updated=true;

        $games = Game::where('season_id', $game->season_id)->orderBY('date', 'asc')->get();
        return view('games', compact('games', 'updated'));

    }

    public function store(Request $request) 
    {
        $request->validate([
            'local_team' => 'required',
            'visitor_team' => 'required',
            'local_goals' => 'required',
            'visitor_goals' => 'required',
            'date' => 'required'
        ]);

        $created = false;

        $newGame = new Game;

        $newGame->local_team = $request->local_team;
        $newGame->visitor_team = $request->visitor_team;
        $newGame->local_goals = $request->local_goals;
        $newGame->visitor_goals = $request->visitor_goals;
        $newGame->date = $request->date;
        $newGame->season_id = $request->season_id;

        if($newGame->save()) $created = true;

        $games = Game::where('season_id', $newGame->season_id)->orderBY('date', 'asc')->get();

        return view('games', compact('games', 'created'));
    }
}
