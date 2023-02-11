<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePatientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pt_norm' => ['nullable'],
            'pt_name' => ['required', Rule::unique('patients', 'pt_name')],
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
            'pt_profession' => ['required'],
            'patient_id' => ['nullable'],
            'ptf_name' => ['required'],
            'ptf_slug' => ['nullable'],
            'ptf_relation' => ['required'],
            'ptf_address' => ['required'],
            'ptf_kelurahan' => ['required'],
            'ptf_kecamatan' => ['required'],
            'ptf_city' => ['required'],
            'ptf_phone' => ['required'],
            'ptf_profession' => ['required']
        ];
    }
}
