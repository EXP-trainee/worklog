@extends('admin.default')

@section('page-header')
	Report <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
			'action' => ['WorklogReportController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}
		@include('admin.worklog.reports.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
