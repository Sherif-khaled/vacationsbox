<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOvertimesRequest extends FormRequest
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
            'overtime_date' => 'required|date_format:'.config('app.date_format'),
            'time_start' => 'required|date_format:H:i:s',
            'time_end' => 'required|date_format:H:i:s',
            'period' => 'required|date_format:H:i:s',
            'overtime_reason' => 'min:10|max:500|required',
        ];
    }
}
