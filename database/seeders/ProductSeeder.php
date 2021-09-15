<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name' => 'Nice shoes',
            'price' => '26',
            'description' => 'Are u mad to buy this shoes...',
            'category' => 'shoes',
            'gallery' => 'images/product1.png',
            
        ],
        [
            'name' => 'Exclusive belt',
            'price' => '21',
            'description' => 'Are u mad to buy this belt...',
            'category' => 'belts',
            'gallery' => 'images/product2.png',
            
        ],
        [
            'name' => 'hat',
            'price' => '31',
            'description' => 'Are u mad to buy this hat...',
            'category' => 'hats',
            'gallery' => 'images/product3',
            
        ],
        
        [
            'name' => 'Exclusive belt',
            'price' => '36',
            'description' => 'Are u mad to buy this belt...',
            'category' => 'belts',
            'gallery' => 'images/product6.png',
            
        ],

        [
            'name' => 'Exclusive shoes',
            'price' => '56',
            'description' => 'Are u mad to buy this shoes...',
            'category' => 'shoes',
            'gallery' => 'images/product7.png',
            
        ],

        [
            'name' => 'Exclusive glasses',
            'price' => '21',
            'description' => 'Are u mad to buy this glasses...',
            'category' => 'glasses',
            'gallery' => 'images/product8.png',
            
        ]
    
    
    ]);
    }
}
