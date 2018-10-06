@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td field-key='role'>{{ $user->role->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.user-status')</th>
                            <td field-key='user_status'>{{ $user->user_status }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $user->employee_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.gender')</th>
                            <td field-key='gender'>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.dateofbirth')</th>
                            <td field-key='dateofbirth'>{{ $user->dateofbirth }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.job-title')</th>
                            <td field-key='job_title'>{{ $user->job_title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.profile-picture')</th>
                            <td field-key='profile_picture'>@if($user->profile_picture)<a href="{{ asset(env('UPLOAD_PATH').'/' . $user->profile_picture) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $user->profile_picture) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#employeebalances" aria-controls="employeebalances" role="tab" data-toggle="tab">Employee balances</a></li>
<li role="presentation" class=""><a href="#useractions" aria-controls="useractions" role="tab" data-toggle="tab">User actions</a></li>
<li role="presentation" class=""><a href="#errand" aria-controls="errand" role="tab" data-toggle="tab">Errand</a></li>
<li role="presentation" class=""><a href="#vacations" aria-controls="vacations" role="tab" data-toggle="tab">Vacations</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="employeebalances">
<table class="table table-bordered table-striped {{ count($employee_balances) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="useractions">
<table class="table table-bordered table-striped {{ count($user_actions) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.user-actions.created_at')</th>
                        <th>@lang('quickadmin.user-actions.fields.user')</th>
                        <th>@lang('quickadmin.user-actions.fields.action')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-model')</th>
                        <th>@lang('quickadmin.user-actions.fields.action-id')</th>
                        
        </tr>
    </thead>

    <tbody>
        @if (count($user_actions) > 0)
            @foreach ($user_actions as $user_action)
                <tr data-entry-id="{{ $user_action->id }}">
                    <td>{{ $user_action->created_at or '' }}</td>
                                <td field-key='user'>{{ $user_action->user->name or '' }}</td>
                                <td field-key='action'>{{ $user_action->action }}</td>
                                <td field-key='action_model'>{{ $user_action->action_model }}</td>
                                <td field-key='action_id'>{{ $user_action->action_id }}</td>
                                
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="errand">
<table class="table table-bordered table-striped {{ count($errands) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.errand.fields.employee-code')</th>
                        <th>@lang('quickadmin.errand.fields.request-date')</th>
                        <th>@lang('quickadmin.errand.fields.start-date')</th>
                        <th>@lang('quickadmin.errand.fields.end-date')</th>
                        <th>@lang('quickadmin.errand.fields.errand-period')</th>
                        <th>@lang('quickadmin.errand.fields.employee-alternative')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($errands) > 0)
            @foreach ($errands as $errand)
                <tr data-entry-id="{{ $errand->id }}">
                    <td field-key='employee_code'>{{ $errand->employee_code }}</td>
                                <td field-key='request_date'>{{ $errand->request_date }}</td>
                                <td field-key='start_date'>{{ $errand->start_date }}</td>
                                <td field-key='end_date'>{{ $errand->end_date }}</td>
                                <td field-key='errand_period'>{{ $errand->errand_period }}</td>
                                <td field-key='employee_alternative'>{{ $errand->employee_alternative->name or '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('errand_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.errands.restore', $errand->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('errand_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.errands.perma_del', $errand->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('errand_view')
                                    <a href="{{ route('admin.errands.show',[$errand->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('errand_edit')
                                    <a href="{{ route('admin.errands.edit',[$errand->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('errand_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.errands.destroy', $errand->id])) !!}
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
<div role="tabpanel" class="tab-pane " id="vacations">
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

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
