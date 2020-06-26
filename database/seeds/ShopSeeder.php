<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            ['user_id'=>'1','name'=>'shopee','price'=>'5000000'],
            ['user_id'=>'2','name'=>'lazada','price'=>'8000000'],
            ['user_id'=>'3','name'=>'tiki','price'=>'600000'],
            ['user_id'=>'4','name'=>'sendo','price'=>'9000000'],
            ['user_id'=>'5','name'=>'chotot','price'=>'12000000'],
            ['user_id'=>'6','name'=>'phukiennam','price'=>'4000000'],
        ]);
    }
}
