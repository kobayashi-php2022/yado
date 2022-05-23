<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => '伊 依三地',
                'password' => 'Z2ds2NFiF6NR',
                'auth' => '会員',
                'address' => '三重県松阪市菅生町160-15',
                'email' => 'syatikudesu0819@yahoo.co.jp',
                'tel' => '070-9443-6285',
                'birth' => '19870819',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '尾抜 野里悠',
                'password' => 'dsLXeGR7uXTV',
                'auth' => '会員',
                'address' => '福島県河沼郡湯川村田川142-11',
                'email' => 'noyunoyu0831@gmail.com',
                'tel' => '070-9391-4076',
                'birth' => '20010831',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '佐々木 健太',
                'password' => 'DXQHF7z4HzAc',
                'auth' => '会員',
                'address' => '京都府京都市西京区大原野小塩町477-19',
                'email' => 'kenta1202@yahoo.co.jp',
                'tel' => '070-9656-1235',
                'birth' => '19571202',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '荒川 正',
                'password' => 'GpcUYj2DHkX4',
                'auth' => '管理者',
                'address' => '兵庫県豊岡市大谷407-5',
                'email' => 'masashi.arakawa@sjktravel.co.jp',
                'tel' => '070-3444-6996',
                'birth' => '19761218',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '津野田 充',
                'password' => 'NBkk5KHndCXQ',
                'auth' => '会員',
                'address' => '愛知県豊橋市柱六番町790-8',
                'email' => 'tunoda0827@gmail.com',
                'tel' => '070-9238-7340',
                'birth' => '19830827',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ]
            
            ]);
    }
}