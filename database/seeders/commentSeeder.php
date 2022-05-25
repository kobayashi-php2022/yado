<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->insert([
            [
                'user_id' => '1',
                'star' => '4',
                'comment' => 'よかった',
                'hotels_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'user_id' => '1',
                'star' => '2',
                'comment' => '部屋の埃が気になった',
                'hotels_id' => '3',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            
            ]);
    }
}
