<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeBalancesRequest extends FormRequest
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
            
            'employee_code_id' => 'required',
            'yearly_balance' => 'max:30|required|numeric',
            'casual_balance' => 'max:7|required|numeric',
        ];
    }
}
