<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use Hash;
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

        User:: insert([
          [
            'name' => 'himel',
            'email' => 'himel@gmail.com',
            'password' => hash::make('123'),
            'role' => 'admin',
            'created_at' => date('y-m-d h:i:s')
          ],
          [
            'name' => 'himel1',
            'email' => 'himel1@gmail.com',
            'password' => hash::make('123'),
            'role' => 'user',
            'created_at' => date('y-m-d h:i:s')
          ]
        ]);
    }
}
