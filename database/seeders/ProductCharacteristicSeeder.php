<?php

namespace Database\Seeders;

use App\Models\ProductCharacteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCharacteristic::create([
            'product_id'=>'9ab0bb65-bf38-4d8f-b246-95f26f2f3eb9',
            'characteristic_id'=>1,
            'value'=>8
        ]);
        ProductCharacteristic::create([
            'product_id'=>'9ab0bb65-bf38-4d8f-b246-95f26f2f3eb9',
            'characteristic_id'=>2,
            'value'=>'Purple'
        ]);
    }
}
