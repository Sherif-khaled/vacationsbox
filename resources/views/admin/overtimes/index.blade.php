@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.overtime.title')</h3>
    @can('overtime_create')
    <p>
        <a href="{{ route('admin.overtimes.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('overtime_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.overtimes.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.overtimes.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($overtimes) > 0 ? 'datatable' : '' }} @can('overtime_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('overtime_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.overtime.fields.employee-code')</th>
                        <th>@lang('quickadmin.overtime.fields.overtime-date')</th>
                        <th>@lang('quickadmin.overtime.fields.time-start')</th>
                        <th>@lang('quickadmin.overtime.fields.time-end')</th>
                        <th>@lang('quickadmin.overtime.fields.period')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($overtimes) > 0)
                        @foreach ($overtimes as $overtime)
                            <tr data-entry-id="{{ $overtime->id }}">
                                @can('overtime_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='employee_code'>{{ $overtime->employee_code }}</td>
                                <td field-key='overtime_date'>{{ $overtime->overtime_date }}</td>
                                <td field-key='time_start'>{{ $overtime->time_start }}</td>
                                <td field-key='time_end'>{{ $overtime->time_end }}</td>
                                <td field-key='period'>{{ $overtime->period }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('overtime_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.overtimes.restore', $overtime->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('overtime_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.overtimes.perma_del', $overtime->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('overtime_view')
                                    <a href="{{ route('admin.overtimes.show',[$overtime->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('overtime_edit')
                                    <a href="{{ route('admin.overtimes.edit',[$overtime->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('overtime_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.overtimes.destroy', $overtime->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('overtime_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.overtimes.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection