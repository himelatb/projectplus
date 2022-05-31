<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
          [
            'name' =>'himel',
            'email'=>'himel@gmail.com',
            'password' => bcrypt('12345678')
          ],
          [
            'name' =>'himel2',
            'email'=>'himel2@gmail.com',
            'password' => bcrypt('12345678')
          ],
          [
            'name' =>'himel3',
            'email'=>'himel3@gmail.com',
            'password' => bcrypt('12345678')
          ],
          [
            'name' =>'himel4',
            'email'=>'himel4@gmail.com',
            'password' => bcrypt('12345678')
          ]
        ]);
    }
}
