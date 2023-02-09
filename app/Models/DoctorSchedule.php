<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['clinic_id', 'doctor_id', 'dcs_code', 'dcs_day', 'dcs_start', 'dcs_end', 'dcs_is_active'];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function getRouteKeyName()
    {
        return 'dcs_code';
    }
}
