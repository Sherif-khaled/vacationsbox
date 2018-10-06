@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacations.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $vacation->employee_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.request-date')</th>
                            <td field-key='request_date'>{{ $vacation->request_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.start-date')</th>
                            <td field-key='start_date'>{{ $vacation->start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.end-date')</th>
                            <td field-key='end_date'>{{ $vacation->end_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.count-days')</th>
                            <td field-key='count_days'>{{ $vacation->count_days }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.vacation-type')</th>
                            <td field-key='vacation_type'>{{ $vacation->vacation_type->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.reason')</th>
                            <td field-key='reason'>{!! $vacation->reason !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.employee-alternative')</th>
                            <td field-key='employee_alternative'>{{ $vacation->employee_alternative->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.accepted-by-manager')</th>
                            <td field-key='accepted_by_manager'>{{ Form::checkbox("accepted_by_manager", 1, $vacation->accepted_by_manager == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.vacations.fields.accepted-by-hr')</th>
                            <td field-key='accepted_by_hr'>{{ Form::checkbox("accepted_by_hr", 1, $vacation->accepted_by_hr == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.vacations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
