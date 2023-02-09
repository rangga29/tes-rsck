<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientFamily extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'patient_id', 'ptf_name', 'ptf_slug', 'ptf_relation', 'ptf_address', 'ptf_kelurahan', 'ptf_kecamatan',
        'ptf_city', 'ptf_phone', 'ptf_profession'
    ];
    protected $dates = ['deleted_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function getRouteKeyName()
    {
        return 'ptf_slug';
    }

    public function sluggable(): array
    {
        return [
            'ptf_slug' => [
                'source' => 'ptf_name'
            ]
        ];
    }
}
