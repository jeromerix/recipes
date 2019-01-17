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
              'instruction' => '1. bake the minced beef if its finished add the
                                   vegetables and the bag of taco spices
                                2. put the taco chips at the bottom of the oven dish,
                                   cover it with cheddar put the minced meat
                                   over it and over it the grated cheese.

                                3. set 10 minutes in a preheated oven at 220 degrees.
                                   The dish is ready when the cheese is melted on top.',
              'method' => 'Backing',
              'sort' => 'Dinner',
              'how_many' => '2',
              'cuisine' => 'Mexican',
              'prep_time' => '15',
              'image_link' => ''


          ],
          [
              'name' => 'Apple Pie',
              'instruction' => '1.In a small bowl, combine the sugars, flour and spices; set aside.
                                  In a large bowl, toss apples with lemon juice.
                                  Add sugar mixture; toss to coat.
                                2.Line a 9-in. pie plate with bottom crust;
                                  trim even with edge. Fill with apple mixture;
                                  dot with butter. Roll remaining crust to fit top of pie;
                                  place over filling. Trim, seal and flute edges. Cut slits in crust.
                                3.Beat egg white until foamy; brush over crust. Sprinkle with sugar.
                                  Cover edges loosely with foil.
                                  4.Bake at 375° for 25 minutes.
                                  Remove foil and bake until crust is golden brown and filling is bubbly,
                                  20-25 minutes longer.
                                  Cool on a wire rack',

              'method' => 'Backing',
              'sort' => 'Dessert',
              'how_many' => '8',
              'cuisine' => 'English',
              'prep_time' => '40',
              'image_link' => ''


          ],
          [
              'name' => 'Basic omelette',
              'instruction' => 'Note: add the filling of your choice – grated cheese, ham, fresh herbs, mushrooms and smoked salmon are favourites
                                1. Season the beaten eggs well with salt and pepper. Heat the oil and butter in a non-stick frying pan over a medium-low heat until the butter has melted and is foaming. 
                                2. Pour the eggs into the pan, tilt the pan ever so slightly from one side to another to allow the eggs to swirl and cover the surface of the pan completely. Let the mixture cook for about 20 seconds then scrape a line through the middle with a spatula. 
                                3. Tilt the pan again to allow it to fill back up with the runny egg. Repeat once or twice more until the egg has just set. 
                                4. At this point you can fill the omelette with whatever you like – some grated cheese, sliced ham, fresh herbs, sautéed mushrooms or smoked salmon all work well. Scatter the filling over the top of the omelette and fold gently in half with the spatula. Slide onto a plate to serve.',
              'method' => 'Simmering',
              'sort' => 'Lunch',
              'how_many' => '1',
              'cuisine' => 'English',
              'prep_time' => '10',
              'image_link' => ''


          ],
          [
              'name' => 'Bibimbap',
              'instruction' => '1. Stir cucumber pieces with 1/4 cup gochujang paste in a bowl; set aside.
                                2. Bring about 2 cups of water to a boil in a large nonstick skillet and stir in spinach;
                                   cook until spinach is bright green and wilted, 2 to 3 minutes. Drain spinach and squeeze out as much moisture as possible;
                                   set spinach aside in a bowl and stir soy sauce into spinach.
                                3. Heat 1 teaspoon olive oil in large nonstick skillet and cook and stir carrots until softened,
                                   about 3 minutes; stir in garlic and cook just until fragrant, about 1 more minute.
                                   Stir in cucumber pieces with gochujang paste; sprinkle with red pepper flakes, and set the mixture aside in a bowl.
                                4. Brown beef in a clean nonstick skillet over medium heat, about 5 minutes per side,
                                   and set aside. In a separate nonstick skillet,
                                   heat 1 more teaspoon olive oil over medium-low heat and fry the eggs just on one side until yolks are runny but whites are firm,
                                   2 to 4 minutes each.
                                5. To assemble the dish, divide cooked rice into 4 large serving bowls; top with spinach mixture,
                                   a few pieces of beef, and cucumber mixture. Place 1 egg atop each serving. Drizzle each bowl with 1 teaspoon of sesame oil, a sprinkle of sesame seeds, and a small amount of gochujang paste if desired. ',
              'method' => 'Simmering',
              'sort' => 'Dinner',
              'how_many' => '1',
              'cuisine' => 'Korean',
              'prep_time' => '60',
              'image_link' => ''


          ],
          [
              'name' => 'Pancakes',
              'instruction' => '1. Put 100g plain flour, 2 large eggs, 300ml milk,
                                   1 tbsp sunflower or vegetable oil and a pinch of salt into a bowl or large jug, then whisk to a smooth batter.
                                2. Set aside for 30 mins to rest if you have time,
                                   or start cooking straight away.
                                3. Set a medium frying pan or crêpe pan over a medium heat and carefully wipe it with some oiled kitchen paper.
                                4. When hot, cook your pancakes for 1 min on each side until golden, keeping them warm in a low oven as you go.
                                5. Serve with lemon wedges and caster sugar, or your favourite filling.
                                   Once cold, you can layer the pancakes between baking parchment, then wrap in cling film and freeze for up to 2 months.',
              'method' => 'Backing',
              'sort' => 'Dinner',
              'how_many' => '2',
              'cuisine' => 'French',
              'prep_time' => '30',
              'image_link' => ''


          ],
          [
              'name' => 'Salmon Fillets',
              'instruction' => '1. Preheat oven to 400 degrees F (200 degrees C).
                                   Line a shallow baking pan with aluminum foil.
                                2. Place salmon skin-side down on foil.
                                   Spread a thin layer of mustard on the top of each fillet,
                                   and season with salt and pepper. Top with bread crumbs,
                                   then drizzle with melted butter.
                                3. Bake in a preheated oven for 15 minutes, or until salmon flakes easily with a fork.
',
              'method' => 'Roasting',
              'sort' => 'Dinner',
              'how_many' => '4',
              'cuisine' => 'Western',
              'prep_time' => '25',
              'image_link' => ''


          ],
          [
              'name' => '2-ingredient Chocolate Cake',
              'instruction' => '1. Preheat the oven to 325˚F (170˚C).
                                2. Place the chocolate in a microwave-safe bowl and melt completely, about 1 minute.
                                3. Separate the egg yolks and egg whites. Using a hand mixer, whisk the whites until soft peaks form.
                                4. Add the yolks, one by one, into the bowl of chocolate, whisking to combine.
                                5. Using a rubber spatula, gently fold ⅓ of the whipped egg whites into the yolk and chocolate mixture. Repeat with the remaining egg whites, adding ⅓ at a time.
                                6. Pour the batter in a greased 6-inch (15 cm) cake mold.
                                7. Bake for 30 minutes.
                                8. Once the cake is cool to the touch, gently invert it onto a plate.
                                9. Optional: Sprinkle with powdered sugar, slice and serve top with ice cream. Serve with seasonal fruit.',
              'method' => 'Baking',
              'sort' => 'Snack',
              'how_many' => '6',
              'cuisine' => 'Western',
              'prep_time' => '40',
              'image_link' => ''


          ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],
          // [
          //     'name' => '',
          //     'instruction' => '',
          //     'method' => '',
          //     'sort' => '',
          //     'how_many' => '',
          //     'cuisine' => '',
          //     'prep_time' => '',
          //     'image_link' => ''
          //
          //
          // ],


      ]);
    }
}
