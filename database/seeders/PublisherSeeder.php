<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $publisher = new Publisher();
            $publisher->name_company = $faker->company();
            $publisher->city = $faker->city();
            $publisher->date_fondation = $faker->date();
            $publisher->web_site = "http://$publisher->name_company.com";
            $publisher->logo = $faker->imageUrl(250, 250, true);
            $publisher->save();
        }
    }
}
