<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePatientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pt_norm' => ['nullable'],
            'pt_name' => ['required', Rule::unique('patients', 'pt_name')->ignore($this->patient)],
            'pt_address' => ['required'],
            'pt_kelurahan' => ['required'],
            'pt_kecamatan' => ['required'],
            'pt_city' => ['required'],
            'pt_hometown' => ['required'],
            'pt_dateofbirth' => ['required', 'date'],
            'pt_religion' => ['required'],
            'pt_blood_type' => ['required'],
            'pt_phone' => ['required'],
            'pt_status' => ['required'],
            'pt_education' => ['required'],
            'pt_profession' => ['required']
        ];
    }
}
