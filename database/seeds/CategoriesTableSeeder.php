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
            ['category' => 'Dairy'
            ],
            ['category' => 'Vegetables'
            ],
            ['category' => 'Fruits'
            ],
            ['category' => 'Baking & Grains'
            ],
            ['category' => 'Sweetners'
            ],
            ['category' => 'Spices'
            ],
            ['category' => 'Meats'
            ],
            ['category' => 'Fish'
            ],
            ['category' => 'Seafood'
            ],
            ['category' => 'Condiments'
            ],
            ['category' => 'Sauces'
            ],
            ['category' => 'Oils'
            ],
            ['category' => 'Seasonings'
            ],
            ['category' => 'Legumes'
            ],
            ['category' => 'Alcehol'
            ],
            ['category' => 'Soup'
            ],
            ['category' => 'Nuts'
            ],
            ['category' => 'Snacks'
            ],
            ['category' => 'Desserts'
            ],
            ['category' => 'Beverages'
            ]
         ]);
    }
}
