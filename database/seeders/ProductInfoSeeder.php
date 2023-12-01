<?php

namespace Database\Seeders;

use App\Product;
use Illuminate\Database\Seeder;

class ProductInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Table',
                'description' => 'Kitchen table',
                'price' => 40.5,
                'stock' => 50,
            ],
            [
                'name' => 'Chair',
                'description' => 'Kitchen chair',
                'price' => 20,
                'stock' => 10,
            ],
        ]);
    }
}
