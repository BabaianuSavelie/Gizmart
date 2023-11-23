<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name'=>'Samsung']);
        Brand::create(['name'=>'Bosch']);
        Brand::create(['name'=>'Lenovo']);
        Brand::create(['name'=>'Sony']);
        Brand::create(['name'=>'Apple']);
    }
}
