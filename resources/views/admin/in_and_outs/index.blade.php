@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.in-and-out.title')</h3>
    @can('in_and_out_create')
    <p>
        <a href="{{ route('admin.in_and_outs.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('in_and_out_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.in_and_outs.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.in_and_outs.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($in_and_outs) > 0 ? 'datatable' : '' }} @can('in_and_out_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('in_and_out_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.in-and-out.fields.employee-code')</th>
                        <th>@lang('quickadmin.in-and-out.fields.in-out-type')</th>
                        <th>@lang('quickadmin.in-and-out.fields.request-date')</th>
                        <th>@lang('quickadmin.in-and-out.fields.day')</th>
                        <th>@lang('quickadmin.in-and-out.fields.time')</th>
                        <th>@lang('quickadmin.in-and-out.fields.time-period')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($in_and_outs) > 0)
                        @foreach ($in_and_outs as $in_and_out)
                            <tr data-entry-id="{{ $in_and_out->id }}">
                                @can('in_and_out_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='employee_code'>{{ $in_and_out->employee_code }}</td>
                                <td field-key='in_out_type'>{{ $in_and_out->in_out_type }}</td>
                                <td field-key='request_date'>{{ $in_and_out->request_date }}</td>
                                <td field-key='day'>{{ $in_and_out->day }}</td>
                                <td field-key='time'>{{ $in_and_out->time }}</td>
                                <td field-key='time_period'>{{ $in_and_out->time_period }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('in_and_out_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.in_and_outs.restore', $in_and_out->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('in_and_out_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.in_and_outs.perma_del', $in_and_out->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('in_and_out_view')
                                    <a href="{{ route('admin.in_and_outs.show',[$in_and_out->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('in_and_out_edit')
                                    <a href="{{ route('admin.in_and_outs.edit',[$in_and_out->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('in_and_out_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.in_and_outs.destroy', $in_and_out->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('in_and_out_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.in_and_outs.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection