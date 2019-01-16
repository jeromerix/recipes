<?php

use Illuminate\Database\Seeder;

class Ingredients_RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([


            //nacho cheese ovendish


            //Ground beef
            ['ingredient_id' => '370',
             'recipe_id'    => '1',
             'amount'       => '',
             'unit_id'         => ''
            ],
            //Doritos
            ['ingredient_id' => '686',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],

            //Paprika
            ['ingredient_id' => '261',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],
            //onion
            ['ingredient_id' => '29',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],
            //Garlic
            ['ingredient_id' => '30',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],
            //cheddar
            ['ingredient_id' => '5',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],
            //Grated cheese
            ['ingredient_id' => '13',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],


            //Apple pie

            //sugar
            ['ingredient_id' => '249',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            // Brown sugar
            ['ingredient_id' => '250',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],

            //flour
            ['ingredient_id' => '162',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //Cinnamon
            ['ingredient_id' => '258',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],

            //Ginger
            ['ingredient_id' => '42',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //Ground nutmeg
            ['ingredient_id' => '271',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //Apple
            ['ingredient_id' => '109',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //Lemon juice
            ['ingredient_id' => '686',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],

            //Lemon
            ['ingredient_id' => '108',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //crust
            ['ingredient_id' => '232',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],
            //butter
            ['ingredient_id' => '1',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],

            //
            ['ingredient_id' => '2',
             'recipe_id'     => '2'
             'amount'        =>
             'unit_id'
            ],

            //
            ['ingredient_id' => '249',
             'recipe_id'     => '1'
             'amount'        =>
             'unit_id'
            ],


            //Basic omelette

            //egg
            ['ingredient_id' => '2',
             'recipe_id'     => '3'
             'amount'        =>
             'unit_id'
            ],

            //Sunflower oil
            ['ingredient_id' => '507',
             'recipe_id'     => '3'
             'amount'        =>
             'unit_id'
            ],

            //Butter
            ['ingredient_id' => '1',
             'recipe_id'     => '3'
             'amount'        =>
             'unit_id'
            ],


            //


            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],

            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],

            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],

            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],

            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],

            ['ingredient_id' => '1',
             'recipe_id'     => '4'
             'amount'        =>
             'unit_id'
            ],
        ]);
    }
}
