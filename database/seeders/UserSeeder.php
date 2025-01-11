<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'id'            => 1,
            'role'          => "doctor",
            'country_code'  => "+20",
            'name'          => 'mohamed Ahmed',
            'phone'         => '01014324321',
            'password'      => '123456'
        ]);

        User::create([
            'id'            => 2,
            'role'          => "patient",
            'country_code'  => "+20",
            'name'          => 'mostafa Ahmed',
            'phone'         => '01014324322',
            'password'      => '123456'
        ]);
    }
}
