<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(KitchenwareTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(Ingredient_RecipeTableSeeder::class);
        $this->call(Comment_UserSeeder::class);



    }
}
