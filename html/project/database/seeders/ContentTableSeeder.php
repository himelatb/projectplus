<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Content:: insert([
        [
          'name' => 'himel',
          'email' => 'himel@gmail.com',
          'phone' => '123432432'

        ],
        [
          'name' => 'himel1',
          'email' => 'himel1@gmail.com',
          'phone' => '123432432'
        ]
      ]);
    }
}
