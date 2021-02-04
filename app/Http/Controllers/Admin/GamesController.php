<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGameRequest;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Team;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GamesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('game_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $games = Game::all();

        $teams = Team::get();

        return view('admin.games.index', compact('games', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('game_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team_1s = Team::all()->pluck('teams', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_2s = Team::all()->pluck('teams', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.games.create', compact('team_1s', 'team_2s'));
        
    }

    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->all());

        return redirect()->route('admin.games.index');
    }

    public function edit(Game $game)
    {
        abort_if(Gate::denies('game_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team_1s = Team::all()->pluck('teams', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_2s = Team::all()->pluck('teams', 'id')->prepend(trans('global.pleaseSelect'), '');

        $game->load('team_1', 'team_2');

        return view('admin.games.edit', compact('team_1s', 'team_2s', 'game'));
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->all());

        return redirect()->route('admin.games.index');
    }

    public function show(Game $game)
    {
        abort_if(Gate::denies('game_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->load('team_1', 'team_2');

        return view('admin.games.show', compact('game'));
    }

    public function destroy(Game $game)
    {
        abort_if(Gate::denies('game_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $game->delete();

        return back();
    }

    public function massDestroy(MassDestroyGameRequest $request)
    {
        Game::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
