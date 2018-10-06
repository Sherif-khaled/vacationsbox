@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employee-balances.title')</h3>
    @can('employee_balance_create')
    <p>
        <a href="{{ route('admin.employee_balances.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('employee_balance_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.employee_balances.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.employee_balances.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($employee_balances) > 0 ? 'datatable' : '' }} @can('employee_balance_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('employee_balance_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.employee-balances.fields.employee-code')</th>
                        <th>@lang('quickadmin.employee-balances.fields.yearly-balance')</th>
                        <th>@lang('quickadmin.employee-balances.fields.casual-balance')</th>
                        <th>@lang('quickadmin.employee-balances.fields.exhausted-annually')</th>
                        <th>@lang('quickadmin.employee-balances.fields.exhausted-casual')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($employee_balances) > 0)
                        @foreach ($employee_balances as $employee_balance)
                            <tr data-entry-id="{{ $employee_balance->id }}">
                                @can('employee_balance_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='employee_code'>{{ $employee_balance->employee_code->employee_code or '' }}</td>
                                <td field-key='yearly_balance'>{{ $employee_balance->yearly_balance }}</td>
                                <td field-key='casual_balance'>{{ $employee_balance->casual_balance }}</td>
                                <td field-key='exhausted_annually'>{{ $employee_balance->exhausted_annually }}</td>
                                <td field-key='exhausted_casual'>{{ $employee_balance->exhausted_casual }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('employee_balance_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employee_balances.restore', $employee_balance->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('employee_balance_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employee_balances.perma_del', $employee_balance->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('employee_balance_view')
                                    <a href="{{ route('admin.employee_balances.show',[$employee_balance->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('employee_balance_edit')
                                    <a href="{{ route('admin.employee_balances.edit',[$employee_balance->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('employee_balance_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employee_balances.destroy', $employee_balance->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('employee_balance_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.employee_balances.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection