<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train;

        $train->company_name = $faker->company();
        $train->train_code = $faker->numerify('####');
        $train->coach_number = $faker->numberBetween(3, 12);
        $train->departure_station = $faker->city();
        $train->departure_date_time = $faker->date() . " " . $faker->time();
        $train->arrive_station = $faker->city();
        $train->estimate_arrive_date_time = $faker->date() . " " . $faker->time();
        $train->price = $faker->randomFloat(2, 1, 100);

        $train->save();
    }
}
