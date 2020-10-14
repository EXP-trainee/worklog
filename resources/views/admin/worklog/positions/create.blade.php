@extends('admin.default')

@section('page-header')
	Position <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['WorklogPositionController@store'],
			'files' => true
		])
	!!}

		@include('admin.worklog.positions.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
