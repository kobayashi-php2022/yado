<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

class changeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('changes')->insert([
            [
                'change' => '旅行予約を取り消しました',
                'user_id' => '1',
                'orders_id' => '5',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            
            ]);
    }
}
