<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
   protected $fillable = [
      "product_id",
      "sku",
      "price",
      "stock",
      "main_image",
      "is_available"
   ];

   protected $casts = [
      'is_available' => 'boolean',
      'price' => 'float',
   ];

   public function sampleImages()
   {
      return $this->hasMany(SampleImage::class);
   }

   public function variantAttributes()
   {
      return $this->hasMany(VariantAttribute::class);
   }

   public function product()
   {
      return $this->belongsTo(Product::class);
   }
}
