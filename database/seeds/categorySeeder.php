<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoryflowers')->insert([
            [
                'CategoryName'=>'Bouquet',
                'CategoryImage'=>'bouquet/FlowerBouquet.jpg'
            ],
            [
                'CategoryName'=>'Vase',
                'CategoryImage'=>'vase/GardenLuxury.webp'
            ],
            [
                'CategoryName'=>'Fresh flower',
                'CategoryImage'=>'freshflower/freshflower.jpg'
            ],
            [
                'CategoryName'=>'Blossom box',
                'CategoryImage'=>'blossombox/blossombox.jpg'
            ]
        ]);
    }
}
