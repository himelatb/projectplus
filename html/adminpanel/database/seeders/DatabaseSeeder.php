<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->call([

        UserTableSeeder::class,
        ClassTableSeeder::class,
        GroupTableSeeder::class,
        SectionTableSeeder::class,
        StudentTableSeeder::class,

      ]);
    }
}
