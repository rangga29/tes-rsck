<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFamilyFactory extends Factory
{
    private static $number = 1;

    public function definition()
    {
        $faker = Faker::create('id_ID');
        $name = ucwords($faker->unique()->name());
        $slug = Str::slug($name, '-');
        return [
            'patient_id' => self::$number++,
            'ptf_name' => $name,
            'ptf_slug' => $slug,
            'ptf_relation' => $faker->numberBetween(1, 6),
            'ptf_address' => $faker->streetAddress(),
            'ptf_kelurahan' => $faker->streetName(),
            'ptf_kecamatan' => $faker->streetName(),
            'ptf_city' => $faker->city(),
            'ptf_phone' => $faker->phoneNumber(),
            'ptf_profession' => $faker->words(2, true)
        ];
    }
}
