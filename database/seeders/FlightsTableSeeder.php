<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\Flight;
use Faker\Factory as Faker;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Flight::create([
                'Aircraft_ID' => $faker->rand(1,10),
                'Departure_Airport' => $faker->city(1),
                'Arrival_Airport' => $faker->city(1),
                'Departute_Time' => $faker->dateTime(),
                'Arrival_Time' => $faker->dateTime(),
                'Flight_Duration' => $faker->time('H:i', rand(1, 86400)),
            ]);
        }
    }
}
