<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::Table('recipes')->insert([
          [
              'name' => 'Nacho cheese ovendish',
              'instruction' =>
               '1 bake the minced beef if its finished add the vegetables and the bag of taco spices

                2 put the taco chips at the bottom of the oven dish, cover it with cheddar put the minced meat
                 over it and over it the grated cheese.

                3.set 10 minutes in a preheated oven at 220 degrees.
                The dish is ready when the cheese is melted on top.',
              'method' => 'Oven and pan',
              'how_many' => '2',
              'cuisine' => 'Mexican',
              'prep_time' => '10-20 minutes',
              'image_link' => ''


          ],
          [
              'name' => 'Pie',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => 'Egg',
              'instruction' => '',
              'method' => 'English',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],
          [
              'name' => '',
              'instruction' => '',
              'method' => '',
              'how_many' => '',
              'cuisine' => '',
              'prep_time' => '',
              'image_link' => ''


          ],


      ]);
    }
}
