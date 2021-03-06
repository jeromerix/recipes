<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => bcrypt('password'),
                'avatar'=>'user-avatar.png',

            ],
            [
                'name' => 'Mansour',
                'last_name' => 'Radmar',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Mansour@email.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'avatar'=>'user-avatar.png',

            ],
            [
                'name' => 'Patrick',
                'last_name' => 'Broersma',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Patrick@email.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'avatar'=>'user-avatar.png',

            ],
            [
                'name' => 'Jerome',
                'last_name' => 'ten Cate',
                'city' => 'Leeuwarden',
                'country' => 'Netherlands',
                'email' => 'Jerome@email.com',
                'password' => bcrypt('password'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'avatar'=>'user-avatar.png',

            ]


        ]);
    }
}
