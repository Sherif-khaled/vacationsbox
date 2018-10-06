@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.users.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.users.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('password', trans('quickadmin.users.fields.password').'*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role_id', trans('quickadmin.users.fields.role').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role_id'))
                        <p class="help-block">
                            {{ $errors->first('role_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('user_status', trans('quickadmin.users.fields.user-status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('user_status', $enum_user_status, old('user_status'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('user_status'))
                        <p class="help-block">
                            {{ $errors->first('user_status') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code', trans('quickadmin.users.fields.employee-code').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('gender', trans('quickadmin.users.fields.gender').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('gender', $enum_gender, old('gender'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('gender'))
                        <p class="help-block">
                            {{ $errors->first('gender') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dateofbirth', trans('quickadmin.users.fields.dateofbirth').'', ['class' => 'control-label']) !!}
                    {!! Form::text('dateofbirth', old('dateofbirth'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dateofbirth'))
                        <p class="help-block">
                            {{ $errors->first('dateofbirth') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('job_title', trans('quickadmin.users.fields.job-title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('job_title', old('job_title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('job_title'))
                        <p class="help-block">
                            {{ $errors->first('job_title') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($user->profile_picture)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$user->profile_picture) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$user->profile_picture) }}"></a>
                    @endif
                    {!! Form::label('profile_picture', trans('quickadmin.users.fields.profile-picture').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('profile_picture', old('profile_picture')) !!}
                    {!! Form::file('profile_picture', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('profile_picture_max_size', 2) !!}
                    {!! Form::hidden('profile_picture_max_width', 4096) !!}
                    {!! Form::hidden('profile_picture_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('profile_picture'))
                        <p class="help-block">
                            {{ $errors->first('profile_picture') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('department_id', trans('quickadmin.users.fields.department').'', ['class' => 'control-label']) !!}
                    {!! Form::select('department_id', $departments, old('department_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('department_id'))
                        <p class="help-block">
                            {{ $errors->first('department_id') }}
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

@stop