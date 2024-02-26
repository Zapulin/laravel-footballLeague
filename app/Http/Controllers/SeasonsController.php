<?php

namespace App\Http\Controllers;

use App\Models\Season;

class SeasonsController extends Controller
{
    public function seasons()
    {
        $seasons = Season::all();

        return view('seasons', ['seasons' => $seasons]);
    }
}
