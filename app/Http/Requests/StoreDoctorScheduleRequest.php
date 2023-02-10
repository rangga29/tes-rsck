<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorScheduleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clinic_id' => ['required'],
            'doctor_id' => ['required'],
            'dcs_day' => ['required'],
            'dcs_start' => ['required'],
            'dcs_end' => ['required'],
            'dcs_is_active' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'dcs_day.required' => 'Jadwal Hari Harus Diisi',
            'dcs_start.required' => 'Waktu Mulai Harus Diisi',
            'dcs_end.required' => 'Waktu Selsai Harus Diisi'
        ];
    }
}
