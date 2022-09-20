<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {

        $cars = [
            [
                'targa' => 'AZ192BC',
                'marca' => 'Audi',
                'anno_immatricolazione' => '2022-09-09',
                'km' => 0,
            ],
            [
                'targa' => 'TT123ZC',
                'marca' => 'Ford',
                'anno_immatricolazione' => '2010-01-10',
                'km' => 10000,
            ],
        ];



        foreach ($cars as $car) {
            
            $newCar = new Car();
            $newCar->targa = $car['targa'];
            $newCar->marca = $car['marca'];
            $newCar->anno_immatricolazione = $car['anno_immatricolazione'];
            $newCar->km = $car['km'];
            $newCar->save();
        }
    }
}
