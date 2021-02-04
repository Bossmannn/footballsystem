<?php

namespace App\Http\Controllers;

use App\Game;

use App\Team;

class GamesController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }
   
    public function index()
    {
        $games = Game::all();
        
        return view('front.games', compact('games'));
        
    }

   
}
