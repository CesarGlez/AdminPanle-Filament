<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'category_id'
    ];

    public function productSpecifications()
    {
        return $this->hasMany(ProductSpecification::class);
    }
    public function productFeatures()
    {
        return $this->hasMany(ProductFeature::class);
    }
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
