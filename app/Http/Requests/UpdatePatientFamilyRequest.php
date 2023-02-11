<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientFamilyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
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
