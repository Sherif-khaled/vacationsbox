@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.vacation-types.title')</h3>
    @can('vacation_type_create')
    <p>
        <a href="{{ route('admin.vacation_types.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('vacation_type_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.vacation_types.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.vacation_types.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($vacation_types) > 0 ? 'datatable' : '' }} @can('vacation_type_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('vacation_type_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.vacation-types.fields.title')</th>
                        <th>@lang('quickadmin.vacation-types.fields.inactive')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($vacation_types) > 0)
                        @foreach ($vacation_types as $vacation_type)
                            <tr data-entry-id="{{ $vacation_type->id }}">
                                @can('vacation_type_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='title'>{{ $vacation_type->title }}</td>
                                <td field-key='inactive'>{{ Form::checkbox("inactive", 1, $vacation_type->inactive == 1 ? true : false, ["disabled"]) }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('vacation_type_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacation_types.restore', $vacation_type->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('vacation_type_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacation_types.perma_del', $vacation_type->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('vacation_type_view')
                                    <a href="{{ route('admin.vacation_types.show',[$vacation_type->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('vacation_type_edit')
                                    <a href="{{ route('admin.vacation_types.edit',[$vacation_type->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('vacation_type_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.vacation_types.destroy', $vacation_type->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('vacation_type_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.vacation_types.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection