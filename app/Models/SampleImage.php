<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SampleImage extends Model
{
   protected $fillable = [
      "variant_id",
      "image"
   ];

   public function variant()
   {
      return $this->belongsTo(Variant::class);
   }

}
