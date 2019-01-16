<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('units')->insert([
            [
                'label' => 'g'
            ],
            [
                'label' => 'mg'
            ],
            [
                'label' => 'kg'
            ],
            [
                'label' => 'tbsp'
            ],
            [
                'label' => 'tsp'
            ],
            [
                'label' => 'fl oz'
            ],
            [
                'label' => 'l'
            ],
            [
                'label' => 'dl'
            ],
            [
                'label' => 'ml'
            ],
            [
                'label' => 'cup'
            ],
            [
                'label' => 'gill'
            ],
            [
                'label' => 'bag'
            ],
            [
                'label' => 'cloves'
            ],
            [
                'label' => 'pinch'
            ],

        ]);
    }
}
