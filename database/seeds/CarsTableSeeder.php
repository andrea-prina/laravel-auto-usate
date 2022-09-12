<?php

use App\Car;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++){
            $newCar = new Car();
            $newCar->targa = $faker->jpjNumberPlate();
            $newCar->marca = $faker->firstName();
            $newCar->anno_immatricolazione = $faker->year();
            $newCar->km = $faker->numberBetween(0, 100000);
            $newCar->save();
        }
    }
}
