<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = ['cl_name', 'cl_slug', 'cl_position'];
    protected $dates = ['deleted_at'];

    public function doctor_schedules()
    {
        return $this->hasMany(DoctorSchedule::class, 'clinic_id');
    }

    public function getRouteKeyName()
    {
        return 'cl_slug';
    }

    public function sluggable(): array
    {
        return [
            'cl_slug' => [
                'source' => 'cl_name'
            ]
        ];
    }
}
