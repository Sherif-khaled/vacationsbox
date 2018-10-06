@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.in-and-out.title')</h3>
    
    {!! Form::model($in_and_out, ['method' => 'PUT', 'route' => ['admin.in_and_outs.update', $in_and_out->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code', trans('quickadmin.in-and-out.fields.employee-code').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('in_out_type', trans('quickadmin.in-and-out.fields.in-out-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('in_out_type', $enum_in_out_type, old('in_out_type'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('in_out_type'))
                        <p class="help-block">
                            {{ $errors->first('in_out_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('day', trans('quickadmin.in-and-out.fields.day').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('day', old('day'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('day'))
                        <p class="help-block">
                            {{ $errors->first('day') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time', trans('quickadmin.in-and-out.fields.time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time', old('time'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time'))
                        <p class="help-block">
                            {{ $errors->first('time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('time_period', trans('quickadmin.in-and-out.fields.time-period').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('time_period', old('time_period'), ['class' => 'form-control timepicker', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('time_period'))
                        <p class="help-block">
                            {{ $errors->first('time_period') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('reason', trans('quickadmin.in-and-out.fields.reason').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('reason', old('reason'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('reason'))
                        <p class="help-block">
                            {{ $errors->first('reason') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
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