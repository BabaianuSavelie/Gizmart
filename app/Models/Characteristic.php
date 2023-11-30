<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['name','dataType'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_characteristics')
            ->using(ProductCharacteristic::class)
            ->withPivot('value');
    }
}
