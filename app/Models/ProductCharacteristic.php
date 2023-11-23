<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCharacteristic extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected $fillable = ['product_id','characteristic_id','value'];

}
