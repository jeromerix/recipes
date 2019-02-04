<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('Comments')->insert([
            [
                'comment' => 'Amazing dish, would recommend',
                'rating' => '4',
                'user_id' => '2',
                'recipe_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'comment' => 'Did not like it',
                'rating' => '2',
                'user_id' => '1',
                'recipe_id' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'comment' => 'Awesome food',
                'rating' => '5',
                'user_id' => '3',
                'recipe_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'comment' => 'My girlfriend made this for me, it was excellent',
                'rating' => '4',
                'user_id' => '2',
                'recipe_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
        ]);

    }
}
