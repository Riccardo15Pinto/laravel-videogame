<?php

namespace Database\Seeders;

use App\Models\Developer;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $developer = new Developer();
            $developer->name = $faker->name();
            $developer->country = $faker->country();
            $developer->age = $faker->numberBetween(18, 99);
            $developer->job_title = $faker->jobTitle();
            $developer->save();
        }
    }
}
