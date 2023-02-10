<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClinicRequest extends FormRequest
{
    public function rules()
    {
        return [
            'cl_name' => ['required', Rule::unique('clinics', 'cl_name')->ignore($this->clinic)],
            'cl_slug' => ['nullable'],
            'cl_position' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'cl_name.required' => 'Nama Klinik Harus Diisi',
            'cl_name.unique' => 'Nama Klinik Sudah Ada'
        ];
    }
}
