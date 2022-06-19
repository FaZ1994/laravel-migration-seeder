<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

            $travel = new Travel();

            $travel->travel_start_date = $faker->date();
            $travel->travel_end_date = $faker->date();
            $travel->nation = $faker->country();
            $travel->city = $faker->city();
            $travel->address = $faker->streetAddress();
            $travel->description = $faker->paragraph(5, true);
            $travel->price = $faker->randomFloat(2, 500, 9000);
            $travel->image = $faker->imageUrl(360, 360, 'location', true);
            $travel->save();




        }

    }
}
