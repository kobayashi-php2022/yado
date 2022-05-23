<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DateTime;

class planSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('plans')->insert([
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '1'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '2'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '3'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '5'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '7'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '8'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。',
                'price' => '2000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '9'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '1'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '2'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '3'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '5'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '7'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '8'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。朝食はブュッフェ形式となります。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '9'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '4'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '6'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '9'
            ],
            [
                'name' => '素泊まりプラン',
                'content' => '食事なしプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。',
                'price' => '5000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '10'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。夕食は本館２階のレストラン街にて使用できるチケットを配布いたしますのでそちらをお使いください。',
                'price' => '10000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '4'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。夕食は本館２階のレストラン街にて使用できるチケットを配布いたしますのでそちらをお使いください。',
                'price' => '10000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '6'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。夕食は本館２階のレストラン街にて使用できるチケットを配布いたしますのでそちらをお使いください。',
                'price' => '10000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '9'
            ],
            [
                'name' => '本泊まりプラン',
                'content' => '二食つきプランとなります。本館自慢の個室露天風呂をお楽しみいただけます。夕食は本館２階のレストラン街にて使用できるチケットを配布いたしますのでそちらをお使いください。',
                'price' => '10000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '10'
            ],
            [
                'name' => '朝食付きプラン',
                'content' => '朝食付きプランとなります。',
                'price' => '4000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '1'
            ],
            [
                'name' => '朝食付きプラン',
                'content' => '朝食付きプランとなります。',
                'price' => '4000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '3'
            ],
            [
                'name' => '朝食付きプラン',
                'content' => '朝食付きプランとなります。',
                'price' => '4000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '7'
            ],
            [
                'name' => '朝食付きプラン',
                'content' => '朝食付きプランとなります。',
                'price' => '4000',
                'created_at' => new Datetime(),
                'updated_at' => new Datetime(),
                'hotels_id' => '8'
            ]
            
            
            ]);
        
    }
}
