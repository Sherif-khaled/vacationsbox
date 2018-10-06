<tr data-index="{{ $index }}">
    <td>{!! Form::text('users['.$index.'][name]', old('users['.$index.'][name]', isset($field) ? $field->name: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::email('users['.$index.'][email]', old('users['.$index.'][email]', isset($field) ? $field->email: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::number('users['.$index.'][employee_code]', old('users['.$index.'][employee_code]', isset($field) ? $field->employee_code: ''), ['class' => 'form-control']) !!}</td>
<td>{!! Form::text('users['.$index.'][job_title]', old('users['.$index.'][job_title]', isset($field) ? $field->job_title: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('quickadmin.qa_delete')</a>
    </td>
</tr>