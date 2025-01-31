<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Products extends Model
{
    public function categories(): BelongsTo{
        return $this->belongsTo(ProductCategories::class, 'id', 'product_category_id');
    }
    public function specifications(): HasManyThrough{
        return $this->hasManyThrough(Specifications::class, ProductSpecifications::class, 'product_id', 'id', 'id', 'specification_id');
    }
}
