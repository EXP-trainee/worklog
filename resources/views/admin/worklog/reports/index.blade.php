@extends('admin.default')

@section('page-header')
    Report <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.report.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Value</th>
                        <th>User</th>
                        <th>KPI</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Value</th>
                        <th>User</th>
                        <th>KPI</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.report.edit', $item->id) }}">{{ $item->id }}</a></td>
                            <td>{{ $item->value }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->kpi->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.report.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.report.destroy', $item->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}
    
                                            <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

@endsection