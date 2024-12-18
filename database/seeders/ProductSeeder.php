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
                'name' => 'KIZARU Crewneck Knitwear KANAGAWA',
                'description' => 'KIZARU Crewneck Knitwear KANAGAWA adalah sweater rajut yang terbuat dari bahan rajut berkualitas tinggi. Sweater ini memiliki desain yang menarik dan nyaman dipakai.',
                'category' => 'Crewneck dan Hoodie',
                'price' => 250000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7rasb-m0o9nxc0ajy6e8.webp'
            ],
            [
                'name' => 'KIZARU Crewneck Knitwear Anime Naruto SIXTAIL',
                'description' => 'KIZARU Crewneck Knitwear Anime Naruto SIXTAIL adalah sweater rajut yang terbuat dari bahan rajut berkualitas tinggi. Sweater ini cocok untuk para penggemar anime Naruto karena bekerja sama dengan Anime Naruto secara langsung.',
                'category' => 'Crewneck dan Hoodie',
                'price' => 250000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7rasb-m0o9nxc06c8ue6@resize_w450_nl.webp'
            ],
            [
                'name' => 'KIZARU Cardigan Knitwear WOLFGANG',
                'description' => 'KIZARU Cardigan Knitwear WOLFGANG. Cardigan rajut yang terbuat dari bahan rajut berkualitas tinggi. Cardigan ini memiliki desain yang menarik dan nyaman dipakai.',
                'category' => 'Crewneck dan Hoodie',
                'price' => 250000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7qul6-li2sdnpqs1437f.webp'
            ],
            [
                'name' => 'KIZARU Kaos Pria Hitam T-shirt Anime Bocchi the Rock KESSOKU',
                'description' => 'Kizaru T-shirt Anime Bocchi the Rock KESSOKU adalah kaos pria yang terbuat dari bahan katun berkualitas tinggi. Kaos ini adalah hasil kolaborasi dengan Anime Bocchi the Rock. Kaos ini cocok untuk para penggemar anime.',
                'category' => 'T-shirt',
                'price' => 89000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134201-23020-vv29nbxii2nv25.webp'
            ],
            [
                'name' => 'KIZARU T-Shirt Music Series BABY METAL V2',
                'description' => 'KIZARU T-Shirt Music Series BABY METAL V2. Kaos pria yang terbuat dari bahan katun berkualitas tinggi. Kaos ini adalah hasil kolaborasi dengan grup musik BABY METAL. Kaos ini cocok untuk para penggemar musik.',
                'category' => 'T-shirt',
                'price' => 99000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98u-lohcvktyibrb3d.webp'
            ],
            [
                'name' => 'KIZARU T-Shirt Origin DEMON MACHINE',
                'description' => 'KIZARU T-Shirt Origin DEMON MACHINE. Kaos pria yang terbuat dari bahan katun berkualitas tinggi. Kaos ini cocok untuk para penggemar anime dan manga.',
                'category' => 'T-shirt',
                'price' => 99000,
                'stock' => 10,
                'image' => 'https://down-id.img.susercontent.com/file/id-11134207-7r98q-lvitdb404x5507.webp'
            ],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }
    }
}
