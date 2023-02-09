<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = ['dr_name', 'dr_slug', 'dr_phone'];
    protected $dates = ['deleted_at'];

    public function doctor_schedules()
    {
        return $this->hasMany(DoctorSchedule::class, 'doctor_id');
    }

    public function getRouteKeyName()
    {
        return 'dr_slug';
    }

    public function sluggable(): array
    {
        return [
            'dr_slug' => [
                'source' => 'dr_name'
            ]
        ];
    }
}
