<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
        'user_name' => 'himel',
        'email' => 'himel@gmail.com',
        'password' => bcrypt('123'),
        ]);
    }
}
