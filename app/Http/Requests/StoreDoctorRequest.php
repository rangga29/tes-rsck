<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDoctorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dr_name' => ['required', Rule::unique('doctors', 'dr_name')],
            'dr_slug' => ['nullable'],
            'dr_phone' => ['nullable', 'numeric']
        ];
    }

    public function messages()
    {
        return [
            'dr_name.required' => 'Nama Dokter Harus Diisi',
            'dr_name.unique' => 'Nama Dokter Sudah Ada',
            'dr_phone.numeric' => 'No Telepon Harus Berupa Angka'
        ];
    }
}
