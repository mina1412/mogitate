<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'キウイ',
                'price' => '800',
                'image' => 'kiwi.png'
            ],
            [
                'name' => 'ストロベリー',
                'price' => '1200',
                'image' => 'strawberry.png'
            ],
            [
                'name' => 'オレンジ',
                'price' => '850',
                'image' => 'orange.png'
            ],
            [
                'name' => 'スイカ',
                'price' => '700',
                'image' => 'watermelon.png'
            ],
            [
                'name' => 'ピーチ',
                'price' => '1000',
                'image' => 'peach.png'
            ],
            [
                'name' => 'シャインマスカット',
                'price' => '1400',
                'image' => 'muscat.png'
            ],
            [
                'name' => 'パイナップル',
                'price' => '800',
                'image' => 'pineapple.png'
            ],
            [
                'name' => 'ブドウ',
                'price' => '1100',
                'image' => 'grapes.png'
            ],
            [
                'name' => 'バナナ',
                'price' => '600',
                'image' => 'banana.png'
            ],
            [
                'name' => 'メロン',
                'price' => '900',
                'image' => 'melon.png'
            ],
        ]);
    }
}
