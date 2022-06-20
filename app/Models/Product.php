<?php

namespace App\Models;

use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductVariantPrice;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function varients(){
        return $this->hasMany(ProductVariant::class,'product_id');
    }

    public function productVariantPrice(){
        return $this->hasMany(ProductVariantPrice::class,'product_id');
    }

}
