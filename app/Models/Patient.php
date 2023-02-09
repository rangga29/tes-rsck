<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pt_norm', 'pt_name', 'pt_address', 'pt_kelurahan', 'pt_kecamatan', 'pt_city', 'pt_hometown', 'pt_dateofbith',
        'pt_religion', 'pt_blood_type', 'pt_phone', 'pt_status', 'pt_education', 'pt_profession'
    ];
    protected $dates = ['deleted_at'];

    public function getRouteKeyName()
    {
        return 'pt_norm';
    }
}
