<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([

          [
            "student_name" => "himel",
            "roll" => "1",
            "class_name" => "1",
            "group_name" => "arts",
            "section_name" => "A",
            "created_by" => "1",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

          ],
          [
            "student_name" => "rabbi",
            "roll" => "2",
            "class_name" => "2",
            "group_name" => "science",
            "section_name" => "A",
            "created_by" => "1",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

          ],
          [
            "student_name" => "arib",
            "roll" => "3",
            "class_name" => "9",
            "group_name" => "commerce",
            "section_name" => "B",
            "created_by" => "1",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

          ],
        ]);
    }
}
