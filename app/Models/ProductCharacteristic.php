<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductCharacteristic extends Pivot
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected $table = 'product_characteristics';
    protected $fillable = ['product_id','characteristic_id','value'];

}
