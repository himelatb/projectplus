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
            'appointmentTime' => '2021-03-12 12:22',
            'email' => 'himel@gmail.com',
            'password' => hash::make('123'),
            'created_at' => date('y-m-d h:i:s')
          ],
          [
            'name' => 'himel1',
            'appointmentTime' => '2021-03-13 12:22',
            'email' => 'himel1@gmail.com',
            'password' => hash::make('123'),
            'created_at' => date('y-m-d h:i:s')
          ]
        ]);
    }
}
