<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'img' => 'https://example.com/shoe1.jpg',
                'brand' => 'Nike',
                'title' => 'Nike Air Max',
                'rating' => 4.5,
                'reviews' => 120,
                'sellPrice' => 299.99,
                'orders' => '500+',
                'mrp' => '399.99',
                'discount' => 25,
                'category' => 'Shoes',
            ],
            [
                'img' => 'https://example.com/laptop1.jpg',
                'brand' => 'Dell',
                'title' => 'Dell Inspiron',
                'rating' => 4.2,
                'reviews' => 80,
                'sellPrice' => 4500.00,
                'orders' => '150+',
                'mrp' => '5000.00',
                'discount' => 10,
                'category' => 'Electronics',
            ],
            [
                'img' => 'https://example.com/watch1.jpg',
                'brand' => 'Casio',
                'title' => 'Casio Vintage Watch',
                'rating' => 4.8,
                'reviews' => 230,
                'sellPrice' => 199.99,
                'orders' => '1000+',
                'mrp' => '250.00',
                'discount' => 20,
                'category' => 'Accessories',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
