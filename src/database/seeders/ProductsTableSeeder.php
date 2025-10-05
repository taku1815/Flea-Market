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
    public function run()
    {
        $products = [
            [
                'name' => '腕時計',
                'price' => 15000,
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'image' => 'storage/images/Armani+Mens+Clock.jpg',
                'condition_id' => 1,
                'user_id' => 1,
            ],
            [
                'name' => 'HDD',
                'price' => 5000,
                'description' => '高速で信頼性の高いハードディスク',
                'image' => 'storage/images/HDD+Hard+Disk.jpg',
                'condition_id' => 2,
                'user_id' => 1,
            ],
            [
                'name' => '玉ねぎ3束',
                'price' => 300,
                'description' => '新鮮な玉ねぎ3束のセット',
                'image' => 'storage/images/iLoveIMG+d.jpg',
                'condition_id' => 3,
                'user_id' => 1,
            ],
            [
                'name' => '革靴',
                'price' => 4000,
                'description' => 'クラシックなデザインの革靴',
                'image' => 'storage/images/Leather+Shoes+Product+Photo.jpg',
                'condition_id' => 4,
                'user_id' => 1,
            ],
            [
                'name' => 'ノートPC',
                'price' => 45000,
                'description' => '高性能なノートパソコン',
                'image' => 'storage/images/Living+Room+Laptop.jpg',
                'condition_id' => 1,
                'user_id' => 1,
            ],
            [
                'name' => 'マイク',
                'price' => 8000,
                'description' => '高音質のレコーディング用マイク',
                'image' => 'storage/images/Music+Mic+4632231.jpg',
                'condition_id' => 2,
                'user_id' => 1,
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => 3500,
                'description' => 'おしゃれなショルダーバッグ',
                'image' => 'storage/images/Purse+fashion+pocket.jpg',
                'condition_id' => 3,
                'user_id' => 1,
            ],
            [
                'name' => 'タンブラー',
                'price' => 500,
                'description' => '使いやすいタンブラー',
                'image' => 'storage/images/Tumbler+souvenir.jpg',
                'condition_id' => 4,
                'user_id' => 1,
            ],
            [
                'name' => 'コーヒーミル',
                'price' => 4000,
                'description' => '手動のコーヒーミル',
                'image' => 'storage/images/Waitress+with+Coffee+Grinder.jpg',
                'condition_id' => 1,
                'user_id' => 1,
            ],
            [
                'name' => 'メイクセット',
                'price' => 2500,
                // 'prcie' => '2,500',
                'description' => '便利なメイクアップセット',
                'image' => '外出メイクアップセット.jpg',
                'condition_id' => 2,
                'user_id' => 1,
            ],
        ];
        DB::table('products')->insert($products);
    }
}
