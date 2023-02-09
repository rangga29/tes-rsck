<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    public function definition()
    {
        $faker = Faker::create('id_ID');
        $name = ucwords($faker->unique()->name());
        $slug = Str::slug($name, '-');
        return [
            'dr_name' => $name,
            'dr_slug' => $slug,
            'dr_phone' => $faker->phoneNumber()
        ];
    }
}
