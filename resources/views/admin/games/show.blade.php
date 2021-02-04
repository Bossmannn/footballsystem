@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.game.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.games.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.id') }}
                        </th>
                        <td>
                            {{ $game->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.team_1') }}
                        </th>
                        <td>
                            {{ $game->team_1->teams ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.team_2') }}
                        </th>
                        <td>
                            {{ $game->team_2->teams ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.result_1') }}
                        </th>
                        <td>
                            {{ $game->result_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.game.fields.result_2') }}
                        </th>
                        <td>
                            {{ $game->result_2 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.games.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection