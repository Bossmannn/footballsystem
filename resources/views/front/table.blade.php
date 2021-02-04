@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Standings Table</h3>

                <table class="table table-striped table-bordered table-hover" style="width:160%">
                    <tr>
                        <th>No</th>
                        <th>Team</th>
                        <th>P</th>
                        <th>W</th>
                        <th>D</th>
                        <th>L</th>
                        <th>Pts</th>
                    </tr>
                    @foreach ($teams as $team)
                    <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $team->teams}}</td>
                    <td>{{ $team->played}}</td>
                    <td>{{ $team->won}}</td>
                    <td>{{ $team->tied}}</td>
                    <td>{{ $team->lost}}</td>
                    <td>{{ $team->points}}</td>
                    </tr>
                    @endforeach
                   </table>
             </div>
        </div>
    </div>
    
@endsection
