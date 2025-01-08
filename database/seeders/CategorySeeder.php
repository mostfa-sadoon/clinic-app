<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'ar'=>[
                'title' =>'قلب'
            ],
            'en'=>[
                'title' =>'heart'
            ],
        ]);

        Category::create([
            'ar'=>[
                'title' =>'اسنان'
            ],
            'en'=>[
                'title' =>'Dentist'
            ],
        ]);
    }
}
