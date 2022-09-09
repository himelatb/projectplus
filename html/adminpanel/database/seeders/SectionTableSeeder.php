<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->insert([

        [
          "section_name" => "A"
        ],
        [
          "section_name" => "B"
        ],
        [
          "section_name" => "C"
        ]

      ]);
    }
}
