<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('comments')->insert([
            [
                'comment' => 'Amazing dish, would recommend',
                'rating' => '4',
                'user_id' => '2',
                'recipe_id' => '1',

            ],
            [
                'comment' => 'Did not like it',
                'rating' => '2',
                'user_id' => '1',
                'recipe_id' => '5',

            ],
            [
                'comment' => 'Awesome food',
                'rating' => '5',
                'user_id' => '3',
                'recipe_id' => '2',

            ],
            [
                'comment' => 'My girlfriend made this for me, it was excellent',
                'rating' => '4',
                'user_id' => '2',
                'recipe_id' => '3',

            ],
        ]);

    }
}
