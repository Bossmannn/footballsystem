@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.team.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.teams.update", [$team->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="teams">{{ trans('cruds.team.fields.teams') }}</label>
                <input class="form-control {{ $errors->has('teams') ? 'is-invalid' : '' }}" type="text" name="teams" id="teams" value="{{ old('teams', $team->teams) }}" required>
                @if($errors->has('teams'))
                    <span class="text-danger">{{ $errors->first('teams') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.teams_helper') }}</span>
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