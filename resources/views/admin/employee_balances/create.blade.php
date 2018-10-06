@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employee-balances.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.employee_balances.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('employee_code_id', trans('quickadmin.employee-balances.fields.employee-code').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('employee_code_id', $employee_codes, old('employee_code_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('employee_code_id'))
                        <p class="help-block">
                            {{ $errors->first('employee_code_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('yearly_balance', trans('quickadmin.employee-balances.fields.yearly-balance').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('yearly_balance', old('yearly_balance'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('yearly_balance'))
                        <p class="help-block">
                            {{ $errors->first('yearly_balance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('casual_balance', trans('quickadmin.employee-balances.fields.casual-balance').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('casual_balance', old('casual_balance'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('casual_balance'))
                        <p class="help-block">
                            {{ $errors->first('casual_balance') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

