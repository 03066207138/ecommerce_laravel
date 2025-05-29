<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'mobile',
                'price' => '20000',
                'category' => "electronics",
                'description' => "This is a good computer",
                'gallery' => "https://pixabay.com/photos/mobile-phone-smartphone-keyboard-1917737/"
            ],
            [
                'name' => 'mobile',
                'price' => '20000',
                'category' => "electronics",
                'description' => "This is a good computer",
                'gallery' => "https://pixabay.com/photos/mobile-phone-smartphone-keyboard-1917737/"
            ],
            [
                'name' => 'mobile',
                'price' => '20000',
                'category' => "electronics",
                'description' => "This is a good computer",
                'gallery' => "https://pixabay.com/photos/mobile-phone-smartphone-keyboard-1917737/"
            ]

        ]);
    }
}
