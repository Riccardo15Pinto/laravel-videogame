<?php

namespace Database\Seeders;

use App\Models\Console;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        $console_data = config('console');
        foreach ($console_data as $console) {
            $new_console = new Console();
            $new_console->name_company = $console['name_company'];
            $new_console->city = $console['city'];
            $new_console->web_site = $faker->url();
            $new_console->description = $faker->text(30);
            $new_console->save();
        }
    }
}
