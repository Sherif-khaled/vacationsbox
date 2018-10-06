@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.errand.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.errand.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $errand->employee_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.request-date')</th>
                            <td field-key='request_date'>{{ $errand->request_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.start-date')</th>
                            <td field-key='start_date'>{{ $errand->start_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.end-date')</th>
                            <td field-key='end_date'>{{ $errand->end_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.errand-period')</th>
                            <td field-key='errand_period'>{{ $errand->errand_period }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.employee-alternative')</th>
                            <td field-key='employee_alternative'>{{ $errand->employee_alternative->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.errand.fields.errand-reason')</th>
                            <td field-key='errand_reason'>{!! $errand->errand_reason !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.errands.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
