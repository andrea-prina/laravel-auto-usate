<?php

use App\Car;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $brands = ['Audi', 'Ford', 'Fiat', 'BMW', 'Mercedes', 'Toyota'];

        for ($i=0; $i < 50; $i++) { 
            
            $newCar = new Car();
            $newCar->targa = $faker->numberBetween(10,99) . strtoupper($faker->lexify('???')) . $faker->numberBetween(10,99);
            $newCar->marca = $faker->randomElement($brands);
            $newCar->km = $faker->numberBetween(0,100000);
            $newCar->anno_immatricolazione = $faker->dateTime();
            $newCar->save();
        }
    }
}
