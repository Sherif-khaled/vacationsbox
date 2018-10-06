@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacation-types.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.vacation-types.fields.title')</th>
                            <td field-key='title'>{{ $vacation_type->title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#vacations" aria-controls="vacations" role="tab" data-toggle="tab">Vacations</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="vacations">
<table class="table table-bordered table-striped {{ count($vacations) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.vacation_types.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
