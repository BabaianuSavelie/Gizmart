<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    protected $primaryKey = 'id';
    protected $fillable = ['name','price','category_id','brand_id'];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class);
    }
}
