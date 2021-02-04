<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;

class TableController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
   
    public function index()
    {
        $teams = Team::all()->sortByDesc('points');

        return view('front.table', compact('teams'));
    
    }

   
}
