<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreVacationsRequest extends FormRequest
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
            'request_date' => 'required|date_format:'.config('app.date_format'),
            'start_date' => 'required|date_format:'.config('app.date_format'),
            'end_date' => 'required|date_format:'.config('app.date_format'),
            'count_days' => 'min:1|max:2147483647|required|numeric',
            'vacation_type_id' => 'required',
            'reason' => 'required',
            'employee_alternative_id' => 'required',
        ];
    }
}
