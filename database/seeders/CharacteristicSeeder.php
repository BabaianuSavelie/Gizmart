<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Characteristic::create([
            'name'=>'RAM',
            'dataType'=>'number'
        ]);
        Characteristic::create([
            'name'=>'Color',
            'dataType'=>'string'
        ]);
        Characteristic::create([
            'name'=>'Memory',
            'dataType'=>'number'
        ]);
    }
}
