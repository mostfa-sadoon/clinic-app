<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DoctorCategory;

class DoctorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DoctorCategory::create([
              'doctor_id'    => 1,
              'category_id'  => 1,
        ]);
    }
}
