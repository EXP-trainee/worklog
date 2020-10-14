@extends('admin.default')

@section('page-header')
	User <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
    {!! Form::model($item, [
			'action' => ['WorklogKPIController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}
		@include('admin.worklog.kpis.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
