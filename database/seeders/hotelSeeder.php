<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;



class hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hotels')->insert([
            [
                'name' => '大和ホテル',
                'address' => '北海道室蘭市本町3-950-6',
                'email' => 'yamatohoteru@gmail.com',
                'tel' => '143-338-973',
                'category_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'ゆったり温泉泉の湯',
                'address' => '北海道新冠郡新冠町泉363-2',
                'email' => 'yuttarionsenizumi@gmail.com',
                'tel' => '898-338-1199',
                'category_id' => '3',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '民宿穂村',
                'address' => '千葉県山武市松尾町引越821-9',
                'email' => 'minsyukuhomura@gmail.com',
                'tel' => '333-338-9959',
                'category_id' => '4',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'リゾートホテル出雲',
                'address' => '島根県松江市東出雲町意宇南1-949-14',
                'email' => 'izumohotel@gmail.com',
                'tel' => '140-338-7799',
                'category_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '森の宿桂が丘',
                'address' => '岐阜県可児市桂ケ丘1-206-5',
                'email' => 'moriyado@gmail.com',
                'tel' => '168-338-993',
                'category_id' => '5',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => '藤江温泉桜木',
                'address' => '静岡県藤枝市泉町344-20',
                'email' => 'hujisakura@gmail.com',
                'tel' => '143-318-9173',
                'category_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'hotelsbell',
                'address' => '奈良県五條市西吉野町城戸526-12',
                'email' => 'hotelsbell@gmail.com',
                'tel' => '898-35-1199',
                'category_id' => '3',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'ホテル大門',
                'address' => '京都府木津川市加茂町南大門880-16',
                'email' => 'daimonhotel@gmail.com',
                'tel' => '113-3676-959',
                'category_id' => '3',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'スキーリゾート大須',
                'address' => '秋田県にかほ市象潟町大須郷914-15',
                'email' => 'osuhotel@gmail.com',
                'tel' => '140-338-3799',
                'category_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ],
            [
                'name' => 'ホテル御園館本店',
                'address' => '愛知県北設楽郡東栄町御園647-10',
                'email' => 'misonohonten@gmail.com',
                'tel' => '663-318-921',
                'category_id' => '1',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime()
            ]
            ]);
        
    } 
}
