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
             'unit_id'      => '1'
            ],
            //Doritos
            ['ingredient_id' => '686',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit_id'       => '12'
            ],

            //Paprika
            ['ingredient_id' => '261',
             'recipe_id'     => '1',
             'amount'        => '1',
            'unit_id'        => '1'
            ],
            //onion
            ['ingredient_id' => '29',
             'recipe_id'     => '1',
             'amount'        => '1',
            'unit_id'        => '1'
            ],
            //Garlic
            ['ingredient_id' => '30',
             'recipe_id'     => '1',
             'amount'        => '2',
            'unit_id'        => '13'
            ],
            //cheddar
            ['ingredient_id' => '5',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit_id'       => '1'
            ],
            //Grated cheese
            ['ingredient_id' => '13',
             'recipe_id'     => '1',
             'amount'        => '1',
             'unit_id'       => '1'
            ],


            //Apple pie

            //sugar
            ['ingredient_id' => '249',
             'recipe_id'     => '2',
             'amount'        => '0.5',
             'unit_id'       => '10'
            ],
            // Brown sugar
            ['ingredient_id' => '250',
             'recipe_id'     => '2',
             'amount'        => '0.5',
             'unit_id'       => '10'
            ],

            //flour
            ['ingredient_id' => '162',
             'recipe_id'     => '2',
             'amount'        => '6',
             'unit_id'       => '4'
            ],
            //Cinnamon
            ['ingredient_id' => '258',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '5'
            ],

            //Ginger
            ['ingredient_id' => '42',
             'recipe_id'     => '2',
             'amount'        => '0.25',
             'unit_id'       => '5'
            ],
            //Ground nutmeg
            ['ingredient_id' => '271',
             'recipe_id'     => '2',
             'amount'        => '0.25',
             'unit_id'       => '5'
            ],
            //Apple
            ['ingredient_id' => '109',
             'recipe_id'     => '2',
             'amount'        => '6',
             'unit_id'       => '10'
            ],
            //Lemon juice
            ['ingredient_id' => '686',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '4'
            ],
            //crust
            ['ingredient_id' => '232',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '1'
            ],
            //butter
            ['ingredient_id' => '1',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '4'
            ],

            //egg
            ['ingredient_id' => '2',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '1'
            ],

            //sugar
            ['ingredient_id' => '249',
             'recipe_id'     => '2',
             'amount'        => '1',
             'unit_id'       => '1'
            ],


            //Basic omelette

            //egg
            ['ingredient_id' => '2',
             'recipe_id'     => '3',
             'amount'        => '3',
             'unit_id'       => '1'
            ],

            //Sunflower oil
            ['ingredient_id' => '507',
             'recipe_id'     => '3',
             'amount'        => '1',
             'unit_id'       => '4'
            ],

            //Butter
            ['ingredient_id' => '1',
             'recipe_id'     => '3',
             'amount'        => '1',
             'unit_id'       => '1'
            ],


            //Bibimbap

            //cucumber
            ['ingredient_id' => '47',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '1'
            ],

            //spinach
            ['ingredient_id' => '39',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '1'
            ],

            //soy sauce
            ['ingredient_id' => '450',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '4'
            ],

            //olive oil
            ['ingredient_id' => '509',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '5'
            ],

            //carrots
            ['ingredient_id' => '33',
             'recipe_id'     => '4',
             'amount'        => '2',
             'unit_id'       => '1'
            ],

            //garlic
            ['ingredient_id' => '30',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '13'
            ],

            //red pepper flakes
            ['ingredient_id' => '264',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '14'
            ],

            //beef
            ['ingredient_id' => '320',
             'recipe_id'     => '4',
             'amount'        => '500',
             'unit_id'       => '1'
            ],

            //olive oil
            ['ingredient_id' => '509',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '5'
            ],

            // eggs
            ['ingredient_id' => '2',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit_id'       => '1'
            ],

            //rice
            ['ingredient_id' => '160',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit_id'       => '10'
            ],

            //sesame oil
            ['ingredient_id' => '514',
             'recipe_id'     => '4',
             'amount'        => '4',
             'unit_id'       => '5'
            ],
            //sesame seeds
            ['ingredient_id' => '533',
             'recipe_id'     => '4',
             'amount'        => '1',
             'unit_id'       => '5'
            ],

            //gochujang
            ['ingredient_id' => '309',
             'recipe_id'     => '4',
             'amount'        => '2',
             'unit_id'       => '1'
            ],
            // salmon
            ['ingredient_id' => '390',
             'recipe_id'     => '5',
             'amount'        => '400',
             'unit_id'       => '1'
            ],
            // mustard
            ['ingredient_id' => '309',
             'recipe_id'     => '5',
             'amount'        => '3',
             'unit_id'       => '4'
            ],
            // bread crumbs
            ['ingredient_id' => '166',
             'recipe_id'     => '5',
             'amount'        => '0.25',
             'unit_id'       => '10'
            ],
            //salt and pepper
            ['ingredient_id' => '309',
             'recipe_id'     => '5',
             'amount'        => '2',
             'unit_id'       => '1'
            ],
            ['ingredient_id' => '309',
             'recipe_id'     => '5',
             'amount'        => '2',
             'unit_id'       => '1'
            ],

        ]);
    }
}
