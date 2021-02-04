@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Teams</h3>

                <table class="table table-striped table-bordered table-hover" style="width:160%">
                    <tr>
                        <th>Id</th>
                        <th>Team</th>
                    </tr>
                @foreach ($teams as $team)
                <tr>
                <td>{{ $team->id}}</td>
                <td>{{ $team->teams}}</td>
                </tr>
                @endforeach
                   </table>
             </div>
        </div>
    </div>
@endsection
