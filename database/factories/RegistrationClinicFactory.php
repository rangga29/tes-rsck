<?php

namespace Database\Factories;

use App\Models\Clinic;
use App\Models\Doctor;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationClinicFactory extends Factory
{
    private static $number = 1;

    public function definition()
    {
        $faker = Faker::create('id_ID');
        $x = self::$number++;
        return [
            'patient_id' => $x,
            'clinic_id' => Clinic::all()->random()->id,
            'doctor_id' => Doctor::all()->random()->id,
            'rcl_noreg' => Str::padLeft($x, 8, '0'),
            'rcl_cara_datang' => $faker->numberBetween(1, 4),
            'rcl_tanggungan' => $faker->numberBetween(1, 4)
        ];
    }
}
