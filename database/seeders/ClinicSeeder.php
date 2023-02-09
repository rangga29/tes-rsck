<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    public function run()
    {
        Clinic::create([
            'cl_name' => 'Klinik Penyakit Dalam',
            'cl_slug' => 'klinik-penyakit-dalam',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Bedah',
            'cl_slug' => 'klinik-bedah',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Kulit dan Kelamin',
            'cl_slug' => 'klinik-kulit-dan-kelamin',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Gigi',
            'cl_slug' => 'klinik-gigi',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik THT',
            'cl_slug' => 'klinik-tht',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Syaraf',
            'cl_slug' => 'klinik-syaraf',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Mata',
            'cl_slug' => 'klinik-mata',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik MCU',
            'cl_slug' => 'klinik-mcu',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Anak',
            'cl_slug' => 'klinik-anak',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Obgyn',
            'cl_slug' => 'klinik-obgyn',
            'cl_position' => 'Gedung A Lantai 1',
        ]);

        Clinic::create([
            'cl_name' => 'Klinik Jantung',
            'cl_slug' => 'klinik-jantung',
            'cl_position' => 'Gedung A Lantai 1',
        ]);
    }
}
