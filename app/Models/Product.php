<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'images',
        'brand_id',
        'category_id',
        'price',
        'cost_per_item',
        'sku',
        'barcode',
        'quantity',
        'is_visible',
        'include_shipping',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
