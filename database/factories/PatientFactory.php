<?php

namespace Database\Factories;

use App\Models\Patient;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    private static $number = 1;

    public function definition()
    {
        $faker = Faker::create('id_ID');

        return [
            'pt_norm' => Str::padLeft(self::$number++, 8, '0'),
            'pt_name' => ucwords($faker->unique()->name()),
            'pt_address' => $faker->streetAddress(),
            'pt_kelurahan' => $faker->streetName(),
            'pt_kecamatan' => $faker->streetName(),
            'pt_city' => $faker->city(),
            'pt_hometown' => $faker->city(),
            'pt_dateofbirth' => $faker->dateTime(),
            'pt_religion' => $faker->numberBetween(1, 6),
            'pt_blood_type' => $faker->numberBetween(1, 5),
            'pt_phone' => $faker->phoneNumber(),
            'pt_status' => $faker->numberBetween(1, 4),
            'pt_education' => $faker->numberBetween(1, 8),
            'pt_profession' => $faker->words(2, true)
        ];
    }
}
