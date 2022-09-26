<?php

use App\Optional;
use Illuminate\Database\Seeder;

class OptionalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $optionals = [
            'aria condizionata',
            'sedili riscaldati',
            'portabevande',
            'bluetooth',
            'ricarica wireless',
        ];

        foreach ($optionals as $optional) {
           $newOptional = new Optional();
           $newOptional->nome = $optional;
           $newOptional->save();
        }
    }
}
