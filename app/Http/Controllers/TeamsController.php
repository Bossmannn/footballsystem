<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;


class TeamsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    public function index()
    {
        $teams = Team::all();
        
        return view('front.teams', compact('teams'));
    }

    
}
