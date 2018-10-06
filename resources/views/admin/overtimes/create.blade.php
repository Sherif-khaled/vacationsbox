@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.overtime.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.overtimes.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code', trans('quickadmin.overtime.fields.employee-code').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('employee_code', old('employee_code'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_code'))
                        <p class="help-block">
                            {{ $errors->first('employee_code') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('overtime_date', trans('quickadmin.overtime.fields.overtime-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('overtime_date', old('overtime_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('overtime_date'))
                        <p class="help-block">
                            {{ $errors->first('overtime_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time_start', trans('quickadmin.overtime.fields.time-start').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_start', old('time_start'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_start'))
                        <p class="help-block">
                            {{ $errors->first('time_start') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time_end', trans('quickadmin.overtime.fields.time-end').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_end', old('time_end'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_end'))
                        <p class="help-block">
                            {{ $errors->first('time_end') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('period', trans('quickadmin.overtime.fields.period').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('period', old('period'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('period'))
                        <p class="help-block">
                            {{ $errors->first('period') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('overtime_reason', trans('quickadmin.overtime.fields.overtime-reason').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('overtime_reason', old('overtime_reason'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('overtime_reason'))
                        <p class="help-block">
                            {{ $errors->first('overtime_reason') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.timepicker').datetimepicker({
            autoclose: true,
            timeFormat: "HH:mm:ss",
            timeOnly: true
        });
    </script>

@stop