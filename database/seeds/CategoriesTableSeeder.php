<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('categories')->insert([
            ['category' => 'Dairy',
             'icon'     => '/images/icons/diary.gif'
            ],
            ['category' => 'Vegetables',
             'icon'     => '/images/icons/vegetables.gif'
            ],
            ['category' => 'Fruits',
             'icon'     => '/images/icons/fruits.gif'
            ],
            ['category' => 'Baking & Grains',
             'icon'     => '/images/icons/flour.gif'
            ],
            ['category' => 'Sweetners',
             'icon'     => '/images/icons/sweetners.gif'
            ],
            ['category' => 'Spices',
             'icon'     => '/images/icons/spices.gif'
            ],
            ['category' => 'Meats',
             'icon'     => '/images/icons/meat.gif'
            ],
            ['category' => 'Fish',
             'icon'     => '/images/icons/fish.gif'
            ],
            ['category' => 'Seafood',
             'icon'     => '/images/icons/seafood.gif'
            ],
            ['category' => 'Condiments',
             'icon'     => '/images/icons/condiments.gif'
            ],
            ['category' => 'Sauces',
             'icon'     => '/images/icons/sauces.gif'
            ],
            ['category' => 'Oils',
             'icon'     => '/images/icons/oliveoil.gif'
            ],
            ['category' => 'Seasonings',
             'icon'     => '/images/icons/seasonings.gif'
            ],
            ['category' => 'Legumes',
             'icon'     => '/images/icons/legumes.gif'
            ],
            ['category' => 'Alcehol',
             'icon'     => '/images/icons/alcohol.gif'
            ],
            ['category' => 'Soup',
             'icon'     => '/images/icons/soup.gif'
            ],
            ['category' => 'Nuts',
             'icon'     => '/images/icons/nuts.gif'
            ],
            ['category' => 'Snacks',
             'icon'     => '/images/icons/snacks.gif'
            ],
            ['category' => 'Desserts',
             'icon'     => '/images/icons/desserts.gif'
            ],
            ['category' => 'Beverages',
             'icon'     => '/images/icons/beverages.gif'
            ]
         ]);
    }
}
