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
                'email' => 'Kees@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Mansour',
                'email' => 'Mansour@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Patrick',
                'email' => 'Patrick@email.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'Jerome',
                'email' => 'Jerome@email.com',
                'password' => bcrypt('password'),

            ]


        ]);
    }
}
