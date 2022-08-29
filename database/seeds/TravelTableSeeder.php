<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $cities = [
            'Malta',
            'Ascoli',
            'Madrid',
            'Parigi',
            'Londra'
        ];

        for ($i = 0; $i < 6; $i++) {

            $new_travel = new Travel();
            $new_travel->date = $faker->dateTime();
            $new_travel->number_of_traveler = $faker->randomDigitNotNull();
            $new_travel->city = $cities[$i];

            $new_travel->save();
        }
    }
}
