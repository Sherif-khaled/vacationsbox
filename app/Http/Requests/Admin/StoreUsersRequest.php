<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
            'user_status' => 'required',
            'employee_code' => 'max:2147483647|required|numeric|unique:users,employee_code,'.$this->route('user'),
            'gender' => 'required',
            'dateofbirth' => 'nullable|date_format:'.config('app.date_format'),
            'job_title' => 'min:2|max:50|required',
        ];
    }
}
