<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KitchenwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('kitchenware')->insert([
            [
                'name' => 'Oven'
            ],
            [
                'name' => 'Microwave'
            ],
            [
                'name' => 'Cooking Stove'
            ],
            [
                'name' => 'Rice Cooker'
            ],
            [
                'name' => 'Toaster'
            ],
            [
                'name' => 'Microwave Oven'
            ],
            [
                'name' => 'Kitchen Stove'
            ],
            [
                'name' => 'Fryer'
            ],
            [
                'name' => 'Blender'
            ],
            [
                'name' => 'Steamer'
            ],
            [
                'name' => 'Stock Pot'
            ],
            [
                'name' => 'Fry Pan'
            ],
            [
                'name' => 'Saute Pan'
            ],
            [
                'name' => 'Sauce Pan'
            ],
            [
                'name' => 'Fry Pan'
            ],
            [
                'name' => 'Masher'
            ],
            [
                'name' => 'Spatula'
            ],
            [
                'name' => 'Skillet'
            ],
            [
                'name' => 'Measuring Cup'
            ],
            [
                'name' => 'Salad Spinner'
            ]



        ]);
    }
}
