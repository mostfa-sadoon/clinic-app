<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clinic;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Clinic::create([
             'doctor_id' => 1,
             'address'   => 'Zagazige',
             'lat'       => 31.2656,
             'lon'       => 30.55656,
             'price'     => 150
        ]);
    }
}
