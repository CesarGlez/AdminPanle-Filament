<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = [ "key" ];

    public function variantAttributes()
    {
        return $this->hasMany(VariantAttribute::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
    
}
