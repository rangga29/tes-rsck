<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistrationClinic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patient_id', 'clinic_id', 'doctor_id', 'rcl_noreg', 'rcl_cara_datang', 'rcL_tanggungan'
    ];
    protected $dates = ['deleted_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

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
        return 'rcl_noreg';
    }
}
