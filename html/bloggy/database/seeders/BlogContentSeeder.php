<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogContent;

class BlogContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      BlogContent::insert([
        [
          'user_id' => '1',
          'postTitle'=>'title',
          'postSummary' => 'summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-100x100-1.jpg'
        ],
        [
          'user_id' => '1',
          'postTitle'=>'title2',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-contact-img.jpg'
        ],
        [
          'user_id' => '2',
          'postTitle'=>'title3',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-100x100-1.jpg'
        ],
        [
          'user_id' => '1',
          'postTitle'=>'title4',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-100x100-3.jpg'
        ],
        [
          'user_id' => '4',
          'postTitle'=>'title5',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-100x100-5.jpg'
        ],
        [
          'user_id' => '1',
          'postTitle'=>'title6',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-100x100-3.jpg'
        ],
        [
          'user_id' => '3',
          'postTitle'=>'title7',
          'postSummary' => 'Summary',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra tm-img-100x100-5.jpg Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra tm-img-100x100-5.jpgAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra tm-img-100x100-5.jpgAenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pha',
          'postPhoto' => 'assets/img/tm-img-100x100-5.jpg'
        ],
        [
          'user_id' => '2',
          'postSummary' => 'Summary',
          'postTitle'=>'title8',
          'postDescription' => 'Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra',
          'postPhoto' => 'assets/img/tm-img-310x180-4.jpg'
        ]
      ]);
    }
}
