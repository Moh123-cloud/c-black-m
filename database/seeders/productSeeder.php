<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                [
                    'name' => 'Samsung',
                    'description' => '128gb 8gb',
                    'category' => 'Phone',
                    'price' => '18000',
                    'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D253c/1592019058170_0..png'
                ],
                [
                    'name' => 'Nokia',
                    'description' => '128gb 8gb',
                    'category' => 'Phone',
                    'price' => '18000',
                    'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D253c/1592019058170_0..png'
                ],
                [
                    'name' => 'iphone',
                    'description' => '128gb 8gb',
                    'category' => 'Phone',
                    'price' => '18000',
                    'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D253c/1592019058170_0..png'
                ],
                [
                    'name' => 'Readme',
                    'description' => '128gb 8gb',
                    'category' => 'Phone',
                    'price' => '18000',
                    'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D253c/1592019058170_0..png'
                ],
            ]
        );
    }
}