@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.overtime.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $overtime->employee_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.overtime-date')</th>
                            <td field-key='overtime_date'>{{ $overtime->overtime_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.time-start')</th>
                            <td field-key='time_start'>{{ $overtime->time_start }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.time-end')</th>
                            <td field-key='time_end'>{{ $overtime->time_end }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.period')</th>
                            <td field-key='period'>{{ $overtime->period }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.overtime.fields.overtime-reason')</th>
                            <td field-key='overtime_reason'>{{ $overtime->overtime_reason }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.overtimes.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
