<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductCategories extends Model
{
    public function parent():BelongsTo{
        return $this->belongsTo(ProductCategories::class, 'id', 'parent_id');
    }

    public function children():HasMany{
        return $this->hasMany(ProductCategories::class, 'parent_id', 'id');
    }

    public function products(): HasMany{
        return $this->hasMany(Products::class, 'product_category_id');
    }
}
