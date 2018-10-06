<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateErrandsRequest extends FormRequest
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
            
            'employee_code' => 'max:2147483647|required|numeric',
            'start_date' => 'required|date_format:'.config('app.date_format'),
            'end_date' => 'required|date_format:'.config('app.date_format'),
            'errand_period' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'employee_alternative_id' => 'required',
            'errand_reason' => 'required',
        ];
    }
}
