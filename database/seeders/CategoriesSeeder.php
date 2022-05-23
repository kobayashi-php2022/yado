<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

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
          ['name' => 'シティホテル',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()
          ],
          ['name' => 'リゾートホテル',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()
          ],
          ['name' => 'ビジネスホテル',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()],
          ['name' => '旅館',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()],
          ['name' => '民宿',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()],
          ['name' => 'ペンション',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime()]
      ];

      \DB::table('categories')->insert($data);  
    }
}
