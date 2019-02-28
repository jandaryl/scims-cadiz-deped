<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
{
    /**
     * Determine if the school is authorized to make this request.
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
            'school_name'       => 'required|unique:schools',
            'school_id'         => 'required',
            'district'          => 'required',
            'principal_name'    => 'required',
            'no_of_students'    => 'required',
            'no_of_teachers'    => 'required',
            'no_of_classrooms'  => 'required',
            'address'           => 'required',
            'contact_no'        => 'required',
        ];
    }
}
