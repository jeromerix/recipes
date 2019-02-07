<?php

use Illuminate\Database\Seeder;

class Comment_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('comment_user')->insert([

            // one like on one comment
            'comment_id' => '1',
            'user_id' => '1',
        ]);
    }
}
