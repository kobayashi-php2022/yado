<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DateTime;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders')->insert([
            [
                'num' => '4',
                'check_in' => '20220720170000',
                'check_out' => '20220721090000',
                'room' => '2',
                'hotels_id' => '6',
                'user_id' => '5',
                'plan_id' => '20',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'num' => '1',
                'check_in' => '20220920170000',
                'check_out' => '20220921090000',
                'room' => '1',
                'hotels_id' => '3',
                'user_id' => '1',
                'plan_id' => '3',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'num' => '2',
                'check_in' => '20221224170000',
                'check_out' => '20221226090000',
                'room' => '1',
                'hotels_id' => '9',
                'user_id' => '5',
                'plan_id' => '21',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'num' => '4',
                'check_in' => '20220720170000',
                'check_out' => '20220721090000',
                'room' => '1',
                'hotels_id' => '3',
                'user_id' => '5',
                'plan_id' => '24',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'num' => '1',
                'check_in' => '20221120170000',
                'check_out' => '20221121090000',
                'room' => '1',
                'hotels_id' => '7',
                'user_id' => '1',
                'plan_id' => '12',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            
            ]);
        
    }
}
