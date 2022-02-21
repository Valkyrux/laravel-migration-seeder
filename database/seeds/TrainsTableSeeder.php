<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->start_station = $faker->city();
            $new_train->stop_station = $faker->city();
            $new_train->date = $faker->date();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->ean8();
            $new_train->carriages_number = $faker->numberBetween(3, 12);
            $new_train->delay = $faker->randomElement([0, 1]);
            $new_train->erased = $faker->randomElement([0, 1]);

            $new_train->save();
        }
    }
}
