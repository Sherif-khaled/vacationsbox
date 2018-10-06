<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreInAndOutsRequest extends FormRequest
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
            'in_out_type' => 'required',
            'request_date' => 'required|date_format:'.config('app.date_format'),
            'day' => 'required|date_format:'.config('app.date_format'),
            'time' => 'required|date_format:H:i:s',
            'time_period' => 'required|date_format:H:i:s',
            'reason' => 'required',
        ];
    }
}
