<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            [
                'name' => 'Baju',
                'description' => 'Baju bagus',
                'category' => 'baju',
                'price' => 100000,
                'stock' => 10,
                'image' => 'baju.jpg'
            ],
            [
                'name' => 'Celana',
                'description' => 'Celana bagus',
                'category' => 'celana',
                'price' => 150000,
                'stock' => 10,
                'image' => 'celana.jpg'
            ],
            [
                'name' => 'Topi',
                'description' => 'Topi bagus',
                'category' => 'topi',
                'price' => 50000,
                'stock' => 10,
                'image' => 'topi.jpg'
            ],
            [
                'name' => 'Sepatu',
                'description' => 'Sepatu bagus',
                'category' => 'sepatu',
                'price' => 200000,
                'stock' => 10,
                'image' => 'sepatu.jpg'
            ],
            [
                'name' => 'Kaos',
                'description' => 'Kaos bagus',
                'category' => 'kaos',
                'price' => 75000,
                'stock' => 10,
                'image' => 'kaos.jpg'
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
