<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ClinicSeeder::class);
        Doctor::factory(10)->create();
        DoctorSchedule::factory(20)->create();
        Patient::factory(50)->create();
    }
}
