@extends('admin.default')

@section('page-header')
	Report <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['WorklogReportController@store'],
			'files' => true
		])
	!!}

		@include('admin.worklog.reports.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
