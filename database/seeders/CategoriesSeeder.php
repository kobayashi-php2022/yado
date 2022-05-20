<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
          ['name' => 'シティホテル'],
          ['name' => 'リゾートホテル'],
          ['name' => 'ビジネスホテル'],
          ['name' => '旅館'],
          ['name' => '民宿'],
          ['name' => 'ペンション']
      ];

      \DB::table('categories')->insert($date);  
    }
}
