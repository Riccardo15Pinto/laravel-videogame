<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Publisher;
use App\Models\Videogame;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $publisher_ids = Publisher::pluck('id')->toArray();
        $developer_ids = Developer::pluck('id')->toArray();
        for ($i = 1; $i <= 30; $i++) {
            $videogame = new Videogame();
            $videogame->publisher_id = Arr::random($publisher_ids);
            $videogame->developer_id = Arr::random($developer_ids);
            $videogame->title = $faker->text(50);
            $videogame->description = $faker->paragraph(5, true);
            $videogame->img_path = $faker->imageUrl(250, 250);
            $videogame->release_date = $faker->date();
            $videogame->min_age = $faker->numberBetween(6, 18);
            $videogame->save();
        }
    }
}
