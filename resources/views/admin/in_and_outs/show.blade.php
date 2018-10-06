@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.in-and-out.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $in_and_out->employee_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.in-out-type')</th>
                            <td field-key='in_out_type'>{{ $in_and_out->in_out_type }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.request-date')</th>
                            <td field-key='request_date'>{{ $in_and_out->request_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.day')</th>
                            <td field-key='day'>{{ $in_and_out->day }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.time')</th>
                            <td field-key='time'>{{ $in_and_out->time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.time-period')</th>
                            <td field-key='time_period'>{{ $in_and_out->time_period }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.in-and-out.fields.reason')</th>
                            <td field-key='reason'>{!! $in_and_out->reason !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.in_and_outs.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
