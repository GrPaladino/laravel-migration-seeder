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
    public function run()
    {
        $file = fopen(__DIR__ . "/../csv/train.csv", "r");
        $first_line = true;
        while (!feof($file)) {

            if (!$first_line) {

                $train_data = fgetcsv($file);
                $train = new Train();


                $train->company_name = $train_data[0];
                $train->train_code = $train_data[1];
                $train->coach_number = $train_data[2];
                $train->departure_station = $train_data[3];
                $train->departure_date_time = $train_data[4];
                $train->arrive_station = $train_data[5];
                $train->estimate_arrive_date_time = $train_data[6];
                $train->price = $train_data[7];
                $train->save();
            }
            $first_line = false;
        }
    }
}
