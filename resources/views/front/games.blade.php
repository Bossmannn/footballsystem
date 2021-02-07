@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <h3>Game Results</h3>
            <table class="table table-striped table-bordered table-hover" style="width:160%">
                <tr>
                    <th>No</th>
                    <th>Teams</th>
                    <th>Results</th>
                </tr>
            @foreach ($games as $game)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$game->team_1->teams}} - {{$game->team_2->teams}}</td>
            <td>{{$game->result_1}} : {{$game->result_2}}</td>
            </tr>
                
            @endforeach
            </table>
        </div>
    </div>
@endsection
