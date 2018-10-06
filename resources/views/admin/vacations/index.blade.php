@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacations.title')</h3>
    @can('vacation_create')
    <p>
        <a href="{{ route('admin.vacations.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('vacation_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.vacations.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.vacations.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($vacations) > 0 ? 'datatable' : '' }} @can('vacation_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('vacation_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.vacations.fields.employee-code')</th>
                        <th>@lang('quickadmin.vacations.fields.request-date')</th>
                        <th>@lang('quickadmin.vacations.fields.start-date')</th>
                        <th>@lang('quickadmin.vacations.fields.end-date')</th>
                        <th>@lang('quickadmin.vacations.fields.count-days')</th>
                        <th>@lang('quickadmin.vacations.fields.vacation-type')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($vacations) > 0)
                        @foreach ($vacations as $vacation)
                            <tr data-entry-id="{{ $vacation->id }}">
                                @can('vacation_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='employee_code'>{{ $vacation->employee_code }}</td>
                                <td field-key='request_date'>{{ $vacation->request_date }}</td>
                                <td field-key='start_date'>{{ $vacation->start_date }}</td>
                                <td field-key='end_date'>{{ $vacation->end_date }}</td>
                                <td field-key='count_days'>{{ $vacation->count_days }}</td>
                                <td field-key='vacation_type'>{{ $vacation->vacation_type->title or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('vacation_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacations.restore', $vacation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('vacation_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacations.perma_del', $vacation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('vacation_view')
                                    <a href="{{ route('admin.vacations.show',[$vacation->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('vacation_edit')
                                    <a href="{{ route('admin.vacations.edit',[$vacation->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('vacation_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacations.destroy', $vacation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="15">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('vacation_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.vacations.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection