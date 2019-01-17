<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ingredient_RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_recipe')->insert([


            //nacho cheese ovendish


            //Ground beef
            ['ingredient_id' => '370',
             'recipe_id'    => '1',
             'amount'       => '300',
             'unit'         => 'gram'
            ],
            //Doritos
            ['ingredient_id' => '686',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit'          => 'bag'
            ],

            //Paprika
            ['ingredient_id' => '261',
             'recipe_id'     => '1',
             'amount'        => '1',
            'unit'           => 'whole'
            ],
            //onion
            ['ingredient_id' => '29',
             'recipe_id'     => '1',
             'amount'        => '1',
            'unit'           => 'whole'
            ],
            //Garlic
            ['ingredient_id' => '30',
             'recipe_id'     => '1',
             'amount'        => '2',
            'unit'           => 'cloves'
            ],
            //cheddar
            ['ingredient_id' => '5',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit'          => 'whole'
            ],
            //Grated cheese
            ['ingredient_id' => '13',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit'          => 'whole'
            ],


            //Apple pie

            //sugar
            ['ingredient_id' => '249',
             'recipe_id'     => '2',
             'amount'        => '0.5',
             'unit'          => 'cup'
            ],
            // Brown sugar
            ['ingredient_id' => '250',
             'recipe_id'     => '2',
             'amount'        => '0.5',
             'unit'       => 'cup'
            ],

            //flour
            ['ingredient_id' => '162',
             'recipe_id'     => '2',
             'amount'        => '6',
             'unit'          => 'tbsp'
            ],
            //Cinnamon
            ['ingredient_id' => '258',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'tsp'
            ],

            //Ginger
            ['ingredient_id' => '42',
             'recipe_id'     => '2',
             'amount'        => '0.25',
             'unit'          => 'tsp'
            ],
            //Ground nutmeg
            ['ingredient_id' => '271',
             'recipe_id'     => '2',
             'amount'        => '0.25',
             'unit'          => 'tsp'
            ],
            //Apple
            ['ingredient_id' => '109',
             'recipe_id'     => '2',
             'amount'        => '6',
             'unit'          => 'cup'
            ],
            //Lemon juice
            ['ingredient_id' => '686',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],
            //crust
            ['ingredient_id' => '232',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'whole'
            ],
            //butter
            ['ingredient_id' => '1',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],

            //egg
            ['ingredient_id' => '2',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'whole'
            ],

            //sugar
            ['ingredient_id' => '249',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],


            //Basic omelette

            //egg
            ['ingredient_id' => '2',
             'recipe_id'     => '3',
             'amount'        => '3',
             'unit'          => 'whole'
            ],

            //Sunflower oil
            ['ingredient_id' => '507',
             'recipe_id'     => '3',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],

            //Butter
            ['ingredient_id' => '1',
             'recipe_id'     => '3',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],


            //Bibimbap

            //cucumber
            ['ingredient_id' => '47',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'whole'
            ],

            //spinach
            ['ingredient_id' => '39',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'whole'
            ],

            //soy sauce
            ['ingredient_id' => '450',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'tbsp'
            ],

            //olive oil
            ['ingredient_id' => '509',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'tsp'
            ],

            //carrots
            ['ingredient_id' => '33',
             'recipe_id'     => '4',
             'amount'        => '2',
             'unit'          => 'whole'
            ],

            //garlic
            ['ingredient_id' => '30',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'clove'
            ],

            //red pepper flakes
            ['ingredient_id' => '264',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'pinch'
            ],

            //beef
            ['ingredient_id' => '320',
             'recipe_id'     => '4',
             'amount'        => '500',
             'unit'          => 'whole'
            ],

            //olive oil
            ['ingredient_id' => '509',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'tsp'
            ],

            // eggs
            ['ingredient_id' => '2',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit'          => 'whole'
            ],

            //rice
            ['ingredient_id' => '160',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit'          => 'cup'
            ],

            //sesame oil
            ['ingredient_id' => '514',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit'          => 'tsp'
            ],
            //sesame seeds
            ['ingredient_id' => '533',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit'          => 'tsp'
            ],

            //gochujang
            ['ingredient_id' => '309',
             'recipe_id'     => '4',
             'amount'        => '2',
             'unit'          => 'whole'
            ],
            // salmon
            ['ingredient_id' => '390',
             'recipe_id'     => '5',
             'amount'        => '400',
             'unit'          => 'gram'
            ],
            // mustard
            ['ingredient_id' => '309',
             'recipe_id'     => '5',
             'amount'        => '3',
             'unit'          => 'tbsp'
            ],
            // bread crumbs
            ['ingredient_id' => '166',
             'recipe_id'     => '5',
             'amount'        => '0.25',
             'unit'          => 'cup'
            ],
            //salt and pepper
            ['ingredient_id' => '309',
             'recipe_id'     => '5',
             'amount'        => '2',
             'unit'          => 'pinch'
            ],
            //butter
            ['ingredient_id' => '1',
             'recipe_id'     => '5',
             'amount'        => '0.25',
             'unit'          => 'cup'
            ],

        ]);
    }
}
