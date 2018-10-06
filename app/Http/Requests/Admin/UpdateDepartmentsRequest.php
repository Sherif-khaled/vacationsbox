<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'title' => 'min:2|max:50|required',
            'description' => 'min:10|max:200',
            'users.*.name' => 'required',
            'users.*.email' => 'required|email|unique:users,email,'.$this->route('user'),
            'users.*.employee_code' => 'max:2147483647|required|numeric|unique:users,employee_code,'.$this->route('user'),
            'users.*.job_title' => 'min:2|max:50|required',
        ];
    }
}
