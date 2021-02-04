@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.game.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.games.update", [$game->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="team_1_id">{{ trans('cruds.game.fields.team_1') }}</label>
                <select class="form-control select2 {{ $errors->has('team_1') ? 'is-invalid' : '' }}" name="team_1_id" id="team_1_id">
                    @foreach($team_1s as $id => $team_1)
                        <option value="{{ $id }}" {{ (old('team_1_id') ? old('team_1_id') : $game->team_1->id ?? '') == $id ? 'selected' : '' }}>{{ $team_1 }}</option>
                    @endforeach
                </select>
                @if($errors->has('team_1'))
                    <span class="text-danger">{{ $errors->first('team_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.team_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="team_2_id">{{ trans('cruds.game.fields.team_2') }}</label>
                <select class="form-control select2 {{ $errors->has('team_2') ? 'is-invalid' : '' }}" name="team_2_id" id="team_2_id">
                    @foreach($team_2s as $id => $team_2)
                        <option value="{{ $id }}" {{ (old('team_2_id') ? old('team_2_id') : $game->team_2->id ?? '') == $id ? 'selected' : '' }}>{{ $team_2 }}</option>
                    @endforeach
                </select>
                @if($errors->has('team_2'))
                    <span class="text-danger">{{ $errors->first('team_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.team_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_1">{{ trans('cruds.game.fields.result_1') }}</label>
                <input class="form-control {{ $errors->has('result_1') ? 'is-invalid' : '' }}" type="number" name="result_1" id="result_1" value="{{ old('result_1', $game->result_1) }}" step="1">
                @if($errors->has('result_1'))
                    <span class="text-danger">{{ $errors->first('result_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.result_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="result_2">{{ trans('cruds.game.fields.result_2') }}</label>
                <input class="form-control {{ $errors->has('result_2') ? 'is-invalid' : '' }}" type="number" name="result_2" id="result_2" value="{{ old('result_2', $game->result_2) }}" step="1">
                @if($errors->has('result_2'))
                    <span class="text-danger">{{ $errors->first('result_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.result_2_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection