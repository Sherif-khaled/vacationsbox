@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacations.title')</h3>
    
    {!! Form::model($vacation, ['method' => 'PUT', 'route' => ['admin.vacations.update', $vacation->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code', trans('quickadmin.vacations.fields.employee-code').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('start_date', trans('quickadmin.vacations.fields.start-date').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('end_date', trans('quickadmin.vacations.fields.end-date').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('count_days', trans('quickadmin.vacations.fields.count-days').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('count_days', old('count_days'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('count_days'))
                        <p class="help-block">
                            {{ $errors->first('count_days') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('vacation_type_id', trans('quickadmin.vacations.fields.vacation-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('vacation_type_id', $vacation_types, old('vacation_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('vacation_type_id'))
                        <p class="help-block">
                            {{ $errors->first('vacation_type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('reason', trans('quickadmin.vacations.fields.reason').'*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('reason', old('reason'), ['class' => 'form-control editor', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('reason'))
                        <p class="help-block">
                            {{ $errors->first('reason') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_alternative_id', trans('quickadmin.vacations.fields.employee-alternative').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_alternative_id', $employee_alternatives, old('employee_alternative_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_alternative_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_alternative_id') }}
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
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop