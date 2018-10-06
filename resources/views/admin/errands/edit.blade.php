@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.errand.title')</h3>
    
    {!! Form::model($errand, ['method' => 'PUT', 'route' => ['admin.errands.update', $errand->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code', trans('quickadmin.errand.fields.employee-code').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('start_date', trans('quickadmin.errand.fields.start-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('start_date', old('start_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('start_date'))
                        <p class="help-block">
                            {{ $errors->first('start_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('end_date', trans('quickadmin.errand.fields.end-date').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('end_date', old('end_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('end_date'))
                        <p class="help-block">
                            {{ $errors->first('end_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('errand_period', trans('quickadmin.errand.fields.errand-period').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('errand_period', old('errand_period'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('errand_period'))
                        <p class="help-block">
                            {{ $errors->first('errand_period') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_alternative_id', trans('quickadmin.errand.fields.employee-alternative').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_alternative_id', $employee_alternatives, old('employee_alternative_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_alternative_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_alternative_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('errand_reason', trans('quickadmin.errand.fields.errand-reason').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('errand_reason', old('errand_reason'), ['class' => 'form-control ', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('errand_reason'))
                        <p class="help-block">
                            {{ $errors->first('errand_reason') }}
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
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop