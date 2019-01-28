<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Kees',
                'last_name' => 'Keijser',
                'city' => 'Witmarsum',
                'country' => 'Netherlands',
                'email' => 'Kees@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Mansour',
                'last_name' => 'Radmar',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Mansour@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Patrick',
                'last_name' => 'Broersma',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Patrick@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Jerome',
                'last_name' => 'ten Cate',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Jerome@email.com',
                'password' => bcrypt('password'),

            ]


        ]);
    }
}
