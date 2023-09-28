<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Riski Andriyanto',
        //     'email' => 'putra7a@gmail.com',
        //     'password' => Hash::make('admin')
        // ]);

        $faker = Factory::create();
        for ($i = 1; $i < 20; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('admin')
            ]);
        }
    }
}
