<?php

namespace Database\Factories;

use App\Models\Clinic;
use App\Models\Doctor;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorScheduleFactory extends Factory
{
    public function definition()
    {
        $faker = Faker::create('id_ID');
        return [
            'clinic_id' => Clinic::all()->random()->id,
            'doctor_id' => Doctor::all()->random()->id,
            'dcs_code' => Str::random(10),
            'dcs_day' => $faker->numberBetween(1, 7),
            'dcs_start' => $faker->time('H:i'),
            'dcs_end' => $faker->time('H:i')
        ];
    }
}
