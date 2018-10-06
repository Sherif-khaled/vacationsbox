@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employee-balances.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.employee-balances.fields.employee-code')</th>
                            <td field-key='employee_code'>{{ $employee_balance->employee_code->employee_code or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employee-balances.fields.casual-balance')</th>
                            <td field-key='casual_balance'>{{ $employee_balance->casual_balance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employee-balances.fields.exhausted-annually')</th>
                            <td field-key='exhausted_annually'>{{ $employee_balance->exhausted_annually }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employee-balances.fields.exhausted-casual')</th>
                            <td field-key='exhausted_casual'>{{ $employee_balance->exhausted_casual }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.employee_balances.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
