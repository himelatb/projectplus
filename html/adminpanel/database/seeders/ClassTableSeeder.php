<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('classes')->insert([

        [
          "class_name" => "1"
        ],
        [
          "class_name" => "2"
        ],
        [
          "class_name" => "3"
        ],
        [
          "class_name" => "4"
        ],
        [
          "class_name" => "5"
        ],
        [
          "class_name" => "6"
        ],
        [
          "class_name" => "7"
        ],
        [
          "class_name" => "8"
        ],
        [
          "class_name" => "9"
        ],
        [
          "class_name" => "10"
        ]

      ]);
    }
}
