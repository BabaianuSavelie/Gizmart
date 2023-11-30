<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Iphone 14',
            'price'=>2000,
            'category_id'=>'9ab0bb0e-499a-4033-8b7a-1940f7086a53',
            'brand_id'=>'9ab0bafb-d2c2-4dce-85e8-c74d1ec3f8fc'
        ]);
    }
}
