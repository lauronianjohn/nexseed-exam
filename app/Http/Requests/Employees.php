<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Employees extends FormRequest
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
            'Employees_name' => 'required',
            'Employees_address' => 'required',
            'Employees_Email_address' => 'required',
            'Employees_contact_no' => 'required'
        ];
    }
}
