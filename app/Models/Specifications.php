<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Specifications extends Model
{
    public function category(): BelongsTo{
        return $this->belongsTo(SpecificationCategories::class, 'id', 'specification_category_id');
    }

    public function products(): HasManyThrough{
        return $this->hasManyThrough(Products::class, ProductSpecifications::class, 'specification_id', 'id', 'id', 'product_id');
    }
}
