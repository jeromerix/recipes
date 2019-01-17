<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([


            //Dairy


            ['ingredient' => 'Butter',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Egg',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Milk',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Parmesan',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Cheddar',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Sour cream',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Cream cheese',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Mozzarella',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Cream',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Butter Milk',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Feta',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Ricotta',
             'category_id'    => '1'
            ],
            ['ingredients' => 'grated cheese',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Goat cheece',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Powdered milk',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Brie',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Ghee',
             'category_id'    => '1'
            ],
            ['ingredients' => 'Creme fraiche',
             'category_id'    => '1'
            ],
            ['ingredient' => 'Mascarpone',
             'category_id'    => '1'
            ],
            ['ingredient' => 'Halloumi',
             'category_id'    => '1'
            ],
            ['ingredient' => 'Paneer',
             'category_id'    => '1'
            ],
            [ 'ingredient' => 'Margarine',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Coconut milk',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Almond milk',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Soy milk',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Rice milk',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Hemp milk',
              'category_id'   => '1'
            ],
            [ 'ingredient' => 'Non dairy creamer',
              'category_id'   => '1'
            ],

            //Vegetables


            ['ingredient' => 'Onion',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Garlic',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Tomato',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Potato',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Carrot',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Bell pepper',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Basil',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Parsley',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Broccoli',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Corn',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Spinach',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Mushroom',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Green beans',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Ginger',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Chilli pepper',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Celery',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Rosemary',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Salad green',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Cucumber',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Pickle',
             'category_id'    => '2'
            ],
            ['ingredient' => 'avocado',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Zucchini',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Cilantro',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Olive',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Asparagus',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Cabbage',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Cauliflower',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Dill',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Kale',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Mixed vegetable',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Pumpkin',
             'category_id'    => '2'
            ],
            ['ingredient' => 'squash',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Mint',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Scallion',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Shallot',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Eggplant',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Beet',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Butternut squash',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Horseradish',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Leek',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Caper',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Brussels Sprout',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Artichoke heart',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Chia seeds',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Radish',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Sauerkraut',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Artichoke',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Sweet pepper',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Arugula',
             'category_id'    => '2'
            ],
            ['ingredient' => 'spaghetti squash',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Capsicum',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Bok Choy',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Okra',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Yam',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Fennel',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Snow peas',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Bean sprouts',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Seaweed',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Chard',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Collard',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Piniento',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Watercress',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Tomatillo',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Rocket',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Mustard greens',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Endive',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Jicama',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Kohlrabi',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Butternut',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Celery root',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Daikon',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Radicchio',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Porcini',
             'category_id'    => '2'
            ],
            ['ingredient' => 'Cress',
               'category_id'    => '2'
            ],
            ['ingredient' => 'Water chestnut',
              'category_id'    => '2'
            ],

            ['ingredient' => 'Dulse',
              'category_id'    => '2'
            ],
            ['ingredient' => 'Micro greens',
              'category_id'    => '2'
            ],
            ['ingredient' => 'Burdock',
              'category_id'    => '2'
            ],
            ['ingredient' => 'Chayote',
              'category_id'    => '2'
            ],


            //Fruits


            ['ingredient' => 'Lemon',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Apple',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Banana',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Lime',
             'category_id'   => '3'
            ],
            ['ingredient' => 'strawberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Orange',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Pineapple',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Blueberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Raisin',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Coconut',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Grape',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Peach',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Raspberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Cranberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Mango',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Pear',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Blackberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Cherry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Date',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Watermelon',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Berries',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Kiwi',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Grapefruit',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Mandarin',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Craisins',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Cantaloupe',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Plum',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Apricot',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Clementine',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Prunes',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Apple butter',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Pomegranate',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Nectarine',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Fig',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Tangerine',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Papaya',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Rhubarb',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Sultanas',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Plantain',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Currant',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Passion fruit',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Guava',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Persimmons',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Lychee',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Lingonberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Tangelos',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Kumquat',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Boysenberry',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Star fruit',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Quince',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Honeydew',
             'category_id'   => '3'
            ],
            ['ingredient' => 'Crabapples',
             'category_id'   => '3'
            ],


            //Backing and Grains


            [ 'ingredient' => 'Rice',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Pasta',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bread',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Baking powder',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Baking soda',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bread crumbs',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Cornstarch',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Rolled oats',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Noodle',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Flour tortillas',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Pancake mix',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Yeast',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Cracker',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Quinoa',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Brown rice',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Cornmeal',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Self rising flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Cake mix',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Saltines',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Popcorn',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Macaroni cheese mix',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Corn tortillas',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Ramen',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Cereal',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Biscuits',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Stuffing mix',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Couscous',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Pie crust',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bisquick',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Chips',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Angel hair',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Coconut flake',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bread flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Croutons',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Lasagne',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Pizza dough',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bagel',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Puff pastry',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Hot dog bun',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Barley',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Multigrain bread',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Potato flakes',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Pretzel',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Cornbread',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'English muffin',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Cornflour',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Crescent roll dough',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Cream of wheat',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Coconut flour',
              'category_id_id'   => '4'
            ],
            [ 'ingredient' => 'Pita',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Risotto',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Muffin mix',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bicarbonate of soda',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Ravioli',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Wheat',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Rice flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Polenta',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Baguette',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Gnocchi',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Vermicelli',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Semolina',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Wheat germ',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Buckwheat',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Croissants',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bread dough',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Filo dough',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Yeast flake',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Pierogi',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Matzo meal',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Rye',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Tapioca flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Shortcrust pastry',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Potato starch',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Breadsticks',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Ciabatta',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Spelt',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Angel food',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Tapioca starch',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Starch',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Whole wheat flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Gram flour',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Sourdough starter',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Wafer',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Bran',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Challah',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Sponge cake',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Malt extract',
              'category_id'   => '4'
            ],
            [ 'ingredient' => 'Sorghum flour',
              'category_id'   => '4'
            ],


            //Sweeteners


            [ 'ingredient' => 'Sugar',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Brown sugar',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Honey',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Confectioners sugar',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Maple syrup',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Corn syrup',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Molasses',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Artificial sweetener',
              'category_id'   => '5'
            ],
            [ 'ingredient' => 'Agave nectar',
              'category_id'   => '5'
            ],


            //Spices


            [ 'ingredient' => 'Cinnamon',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Vanilla',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Garlic powder',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Paprika',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Oregano',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chili powder',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Red pepper flake',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Cumin',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Cayenne',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Italian seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Thyme',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'onion powder',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Nutmeg',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Ground nutmeg',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Curry powder',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Bay leaf',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Taco seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Sage',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Clove',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Allspice',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Turmeric',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chive',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Peppercorn',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Ground coriander',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Cajun seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Coriander',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Celery salt',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Vanilla essence',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Herbs',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Steak seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Poultry seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chile powder',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Cardamom',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Italian herbs',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Tarragon',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Garam masala',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Marjoram',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Mustard seed',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Celery seed',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chinese five spice',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Italian spice',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Saffron',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Onion flake',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Herbes de provence',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chipotle',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Dill seed',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Fennel seed',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Caraway',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Cacao',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Star anise',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Savory',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Chili paste',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Tamarind',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Aniseed',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Fenugreek',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Lavender',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Old bay seasoning',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Lemon balm',
              'category_id'   => '6'
            ],


            //Meats


            [ 'ingredient' => 'Chicken breast',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground beef',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Bacon',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Sausage',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef steak',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ham',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Hot dog',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork chops',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken thighs',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground turkey',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Cooked chicken',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Turkey',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pepperoni',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Whole chicken',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken leg',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground pork',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chorizo',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken wings',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef roast',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Polish sausage',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Salami',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork roast',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground chicken',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork ribs',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Spam',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Venison',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork shoulder',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Bologna',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Bratwurst',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Prosciutto',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Corned beef',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken roast',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb chops',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pancetta',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground lamb',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef ribs',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Duck',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork belly',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef liver',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Leg of lamb',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Canadian bacon',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef shank',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Veal',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken giblets',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Cornish hen',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb shoulder',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb shank',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ground veal',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pastrami',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Sliced turkey',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork loin',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef suet',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Veal cutlet',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb loin',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Marrow bones',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Goose',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Chicken tenders',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Veal chops',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Quail',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pheasant',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Lamb liver',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Moose',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Turkey liver',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Pork liver',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Veal shank',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Foie gras',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Beef sirloin',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Liver sausage',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Sweetbread',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Ostrich',
              'category_id'   => '7'
            ],
            [ 'ingredient' => 'Soppressata',
              'category_id'   => '7'
            ],


            //Fish


            [ 'ingredient' => 'Canned tuna',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Salmon',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Tilapia',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Fish fillets',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Cod',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Canned salmon',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Anchovy',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Smoked salmon',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Sardines',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Tuna steak',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Whitefish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Halibut',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Trout',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Haddock',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Flounder',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Catfish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Mahi mahi',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Mackerel',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Sole',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Sea bass',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Red snapper',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Swordfish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Pollock',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Herring',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Perch',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Grouper',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Caviar',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Monkfish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Rockfish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Lemon sole',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Pike',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Barramundi',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Eel',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Bluefish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Carp',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Cuttlefish',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Pompano',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Arctic char',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'John dory',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Marlin',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Amberjack',
              'category_id'   => '8'
            ],
            [ 'ingredient' => 'Sturgeon',
              'category_id'   => '8'
            ],


            //Seafood


            [ 'ingredient' => 'Shrimp',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Crab',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Prawns',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Scallop',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Clam',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Lobster',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Mussel',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Oyster',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Squid',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Calamari',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Crawfish',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Octopus',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Cockle',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Conch',
              'category_id'   => '9'
            ],
            [ 'ingredient' => 'Sea urchin',
              'category_id'   => '9'
            ],


            //Condiments


            [ 'ingredient' => 'Mayonnaise',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Ketchup',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Mustard',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Soy sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Balsamic vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Worcestershire',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Hot sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Barbecue sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Ranch dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Wine vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Apple cider vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Cider vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Italian dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Rice vinegar',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Salad dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Tabasco',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Fish sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Teriyaki',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Steak sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Iahini',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Enchilada sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Vinaigrette dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Oyster sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Honey mustard',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Sriracha',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Caesar dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Taco sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Mirin',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Blue cheese dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Sweet and sour sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Thousand island',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Picante sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Buffalo sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'French dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Tartar sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Cocktail sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Marsala',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Adobo sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Tzatziki sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Sesame dressing',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Ponzu',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Duck sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Pickapeppa sauce',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Yuzu juice',
              'category_id'   => '10'
            ],
            [ 'ingredient' => 'Cream sauce',
              'category_id'   => '10'
            ],


            // Sauces


            [ 'ingredient' => 'Tomato sauce',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Tomato paste',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Salsa',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Pesto',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Alfredo sauce',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Beef gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Curry paste',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Chicken gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Cranberry sauce',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Turkey gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Mushroom gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Sausage gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Onion gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Cream gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Pork gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Tomato gravy',
              'category_id'   => '11'
            ],
            [ 'ingredient' => 'Giblet gravy',
              'category_id'   => '11'
            ],


             //Oils


            [ 'ingredient' => 'Olive oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Vegetable oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Cooking spray',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Canola oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Shortening',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Sesame oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Coconut oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Peanut oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Sunflower oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Lard',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Grape seed oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Corn oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Almond oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Avocado oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Safflower oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Walnut oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Hazelnut oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Palm oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Soybean oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Mustard oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Pistachio oil',
              'category_id'   => '12'
            ],
            [ 'ingredient' => 'Soya oil',
              'category_id'   => '12'
            ],


             //Seasonings


            [ 'ingredient' => 'Bouillon',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Ground ginger',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Sesame seed',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Cream of tartar',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Chili sauce',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Soya sauce',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Apple cider',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Hoisin sauce',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Liquid smoke',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Rice wine',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Vegetable bouillon',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Poppy seed',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Balsamic glaze',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Miso',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Wasabi',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Fish stock',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Rose water',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Pickling salt',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Champagne vinegar',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Bbq rub',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Jamaican jerk spice',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Accent seasoning',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Pickling spice',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Mustard powder',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Mango powder',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Adobo seasoning',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Kasuri methi',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Caribbean jerk seasoning',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Brine',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Matcha powder',
              'category_id'   => '13'
            ],
            [ 'ingredient' => 'Cassia',
              'category_id'   => '13'
            ],


             //Legumes


            [ 'ingredient' => 'Green beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Peas',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Black beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Chickpea',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Lentil',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Refried beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Hummus',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Chili beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Lima beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Kidney beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Pinto beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Edamame',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Split peas',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Snap peas',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Soybeans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Cannellini beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Navy beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'French beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Red beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Great northern beans',
              'category_id'   => '14'
            ],
            [ 'ingredient' => 'Fava beans',
              'category_id'   => '14'
            ],


             //Alcohol


            [ 'ingredient' => 'White wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Beer',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Red wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Vodka',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Rum',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Whiskey',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Tequila',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Sherry',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Bourbon',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Cooking wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Whisky',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Liqueur',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Brandy',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Gin',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Kahlua',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Irish cream',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Triple sec',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Champagne',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Amaretto',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Cabernet sauvignon',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Vermouth',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Bitters',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Maraschino',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Sake',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Grand marnier',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Masala',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Dessert wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Schnapps',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Port wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Sparkling wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Cognac',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Chocolate liqueur',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Burgundy wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Limoncello',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Creme de menthe',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Bloody mary',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Raspberry liquor',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Curacao',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Frangelico',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Shaoxing wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Absinthe',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Madeira wine',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Ouzo',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Anisette',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Grappa',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Ciclon',
              'category_id'   => '15'
            ],
            [ 'ingredient' => 'Drambuie',
              'category_id'   => '15'
            ],


             //Soup


            [ 'ingredient' => 'Chicken broth',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Mushroom soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Beef broth',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Tomato soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Vegetable stock',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Chicken soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Onion soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Vegetable soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Celery soup',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Dashi',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Lamb stock',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Pork stock',
              'category_id'   => '16'
            ],
            [ 'ingredient' => 'Veal stock',
              'category_id'   => '16'
            ],


             //Nuts


            [ 'ingredient' => 'Peanut butter',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Almond',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Walnut',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Pecan',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Peanut',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Cashew',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Flax',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Pine nut',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Pistachio',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Almond meal',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Hazelnut',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Macadamia',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Almond paste',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Chestnut',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Praline',
              'category_id'   => '17'
            ],
            [ 'ingredient' => 'Macaroon',
              'category_id'   => '17'
            ],


             //Snacks and Desserst


            [ 'ingredient' => 'Chocolate',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Apple sauce',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Strawberry jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Graham cracker',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Marshmallow',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate syrup',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Potato chips',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Nutella',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate morsels',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Bittersweet chocolate',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Pudding mix',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Raspberry jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Dark chocolate',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate chips',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'White chocolate',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Brownie mix',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Jello',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Caramel',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate powder',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Candy',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Corn chips',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Cookies',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Apricot jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate bar',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Cookie dough',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Oreo',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Doritos',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate cookies',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Butterscotch',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Blackberry preserves',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Blueberry jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Peach preserves',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Cherry jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Fig jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Plum jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Cinnamon roll',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Fudge',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Cookie crumb',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chilli jam',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Lady fingers',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Chocolate wafer',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Gummy worms',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Biscotti biscuit',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Doughnut',
              'category_id'   => '18'
            ],
            [ 'ingredient' => 'Amaretti cookies',
              'category_id'   => '18'
            ],


            //Desserts


            [ 'ingredient' => 'Black pudding',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Apple jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Red pepper jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Orange jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Jalapeno jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Mint jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Currant jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Lemon jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Quince jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Grape jelly',
              'category_id'   => '19'
            ],
            [ 'ingredient' => 'Chocolate pudding',
              'category_id'   => '19'
            ],
            ['ingredient' => 'Custard',
             'category_id'    => '19'
            ],
            ['ingredient' => 'Yogurt',
             'category_id'    => '19'
            ],


             //Beverages


            [ 'ingredient' => 'Coffee',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Orange juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Tea',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Green tea',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Apple juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Tomato juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Coke',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Chocolate milk',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Pineapple juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Lemonade',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Cranberry juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Espresso',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Fruit juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Ginger ale',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Club soda',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Sprite',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Kool aid',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Grenadine',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Margarita mix',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Cherry juice',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Pepsi',
              'category_id'   => '20'
            ],
            [ 'ingredient' => 'Mountain dew',
              'category_id'   => '20'
            ],

            // new ingredients
            [ 'ingredient' => 'Salt and Pepper',
              'category_id'   => '6'
            ],
            [ 'ingredient' => 'Salt',
              'category_id' => '6'
            ],
            [ 'ingredient' => 'Black Pepper',
              'category_id'   => '6'
            ]
        ]);

    }
}
